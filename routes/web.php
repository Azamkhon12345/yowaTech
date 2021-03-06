<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', function (Request $request) {
//    $temp= $request->session()->get('products');
//    array_push($product,$temp);
//    if (!($request->session()->has('products'))){
//        $_SESSION["products"]=array();
//    }
//    $request->session()->put('products',$product);
    $sess = $request->session()->get('products');
    return view('test',[
        'sss'=>$sess
    ]);
});

Route::get("/promote-to-admin",function (Request $request){
    $user = Auth::user();
    DB::table('users')->where("id",'=',$user->id)->update([
       "role" =>"admin"
    ]);
})->middleware("auth");

Route::get('/', function () {
    $products = DB::table('projects')->where('visible','=',1)->orderBy('id','desc')->take(6)->get();
    
    return view('home',[
            "projects"=>$products,
        ]);
});
Route::get('/contacts', function (Request $request) {

    return view('contacts');
});
Route::get('/shop', function (Request $request) {
    $sess=$request->session()->get('products');
    $products = DB::table('products')->where('visible','=',1)->paginate(15);
    return view('shop',[
        'products'=>$products,
        'sess'=>$sess,
    ]);
});

Route::post('/checkout',function (Request $request){
    $products= $request->session()->get('products');
    $user_data =[
            "email"=>$request->email,
            "name"=>$request->name,
            "surname"=>$request->surname,
            "phone"=>$request->phone_number,
            "adress"=>$request->adress,
            "home_adress"=>$request->home_adress,
    ];

    DB::table('orders')->insert([
        "products"=>json_encode($products),
        "user_data"=>json_encode($user_data),
        "created_at"=>new \DateTime(),
    ]);
    $request->session()->forget('products');

    // Work on it later
//    if($request->create_acc){
//        DB::table('users')->insert([
//            "email"=>$request->email,
//            "username"=>$request->name,
//            "password"=>"123",// WORK ON HASH8 and email verification
//            "created_at"=>new \DateTime(),
//            "name"=>$request->name,
//            "surname"=>$request->surname,
//            "phone"=>$request->phone_number,
//            "role"=>"user",
//            "adress"=>$request->adress,
//            "home_adress"=>$request->home_adress,
//        ]);
//
//    }
    return redirect('/shop');
});

Route::get('/news', function (Request $request) {
    $sess=$request->session()->get('products');

    return view('news',[
        'sess'=>$sess,
    ]);
});
Route::get('/news/{id}', function ($id) {

    return view('newsView',[
        'id'=>$id
    ]);
});

// may use $requset for session in further modifications
Route::get('/projects', function (Request $request) {
    $products = DB::table('projects')->where('visible','=',1)->orderBy('id','desc')->paginate(15);
    $category = DB::table('category')->get();
    return view('projects',[
        'projects'=>$products,
        'categories'=>$category,
    ]);

    
});
Route::post('/projects', function(Request $request){
    if($request->projectCategory == "all"){
        $products = DB::table("projects")->where('visible','=',1)->orderBy('id','desc')->paginate(15);
    
    }else{
        $products = DB::table("projects")->where('category','like',$request->projectCategory)->where('visible','=',1)->orderBy('id','desc')->paginate(15);
        
    }
    $products = DB::table("projects")->where('category','like',$request->projectCategory)->where('visible','=',1)->orderBy('id','desc')->paginate(15);
    $category = DB::table('category')->get();
    return view('projects',[
        'projects'=>$products,
        'categories'=>$category,
    ]);
    
});
Route::get('/projects/view/{id}', function (Request $request,$id) {
    $products = DB::table('projects')
        ->where('visible','=',1)
        ->where('id','=',$id)
        ->get();
    $update = DB::table('news')
        ->where("visible",'=',1)
        ->where("project_id","=",$id)
        ->get();
    $rewards = DB::table('rewards')
        ->where("visible",'=',1)
        ->where("project_id","=",$id)
        ->get();
    $comments = DB::table('comments')
        ->where("visible",'=',1)
        ->where("project_id","=",$id)
        ->orderby('id','desc')
        ->get();
    
    return view('projectView',[
        'project'=>$products,
        'updates' =>$update,
        "rewards"=>$rewards,
        "comments"=>$comments,
    ]);
});
Route::get('/projects/view/pledges/{$id}', function (Request $request,$id) {
    $rewards = DB::table('rewards')
        ->where('visible','=',1)
        ->where('id','=',$id)
        ->get();
    return view('projectView',[
        'rewards'=>$rewards,
    ]);
});

Route::get('/user/profile/{id}',function (Request $request,$id){
    $user_data = DB::table("users")->where('id','=',$id)->get();
    $user_projects = DB::table('projects')->where('creator_id','=',$id)->get();
    
    $update = DB::table('news')
        ->where("visible",'=',1)
        ->where("creator_id","=",$id)
        ->get();
    return view('userProfile',[
        "user_data"=>$user_data,
        "user_projects"=>$user_projects,
        "updates"=>$update,
    ]);
});

Route::post("/project/add/comment/{id}",function (Request $request, $id){
    if(Auth::check()){
        $name = Auth::user()->name;
        $creator_id = Auth::user()->id;
    }else{
        $name = $request->name;
        $creator_id = NULL;
    }
    // make auto registration if you do ont have it via mail and name 
    // pass send to mail with session token for 2 hours
    DB::table('comments')->insert([
        "author" =>$name,
        "body" =>$request->review,
        "project_id" => $id,
        "creator_id" => $creator_id,
      ]);
    $request->session()->flash("message"," Коментарий опубликован ! ");
    return back();
});

//user profile
Route::group(
    [
        'middleware' => ['auth'],
    ],
    function () {

        Route::get('/create-project',function(Request $request){
            if (Auth::check()==false){
                $request->session()->flash('warning','Пожалуйста зарегестрируйтесь');
            }
            $category = DB::table('category')->get();
            return view('createProject',[
                    "categories" => $category
                ]);
        });
        Route::post('create-project',function(Request $request){
            $user = Auth::user();
            if ($request->hasFile('projectPhoto') && $request->file('projectPhoto')->isValid()) {
                $image_path = $request->projectPhoto->store('/projectsImg', ['disk' => 'public_uploads']);
            }else{
                $image_path ="/assets/img/B.png";
            }
            DB::table('projects')->insert([
                "name"=>$request->projectName,
                "main_image"=>$image_path,
                "shortcut"=>$request->projectShortcut,
                "region"=>$request->projectPlace,
                "category"=>$request->projectCategory,
                "price"=>$request->projectPrice,
                "deadline"=>$request->projectDeadline,
                "description"=>$request->projectDescription,
                "creator_id"=>$user->id,
                "created_at"=>new \DateTime(),

            ]);
            $project = DB::table("projects")->where("creator_id",'=',$user->id)->get();
            foreach ($project as $item){
                if(strcmp($item->name,$request->projectName)==0){
                    $project_id = $item->id;
                }
            }
            $tmp =array();
            $tmp = json_decode($user->projects,1 );
            if($tmp != NULL){
                array_push($tmp, [
                    "projectName"=>$request->projectName,
                    "projectID" => $project_id,
                ]);
                DB::table("users")->where('id','=',$user->id)->update([
                    "projects"=>json_encode($tmp,1),
                ]);
            }
            else{
                $tmp =[
                    "projectName"=>$request->projectName,
                    "projectID" => $project_id,
                ];
                DB::table("users")->where('id','=',$user->id)->update([
                    "projects"=>json_encode($tmp,1),
                ]);
            }
            return redirect('/projects/');
        });

        Route::get('/project/{id}/edit',function(Request $request,$id){
            if (Auth::check()==false){
                $request->session()->flash('warning','Пожалуйста зарегестрируйтесь');
                return redirect('/');
            }
            $project = DB::table('projects')->where('id','=',$id)->get();
            foreach ($project as $val){
                if($val->creator_id != Auth::user()->id){
                    $request->session()->flash('warning','У вас нет прав !');
                    return redirect('/');
                }
            }
            
            $rewards = DB::table('rewards')->where('project_id','=',$id)->get();
            $updates = DB::table('news')->where('project_id','=',$id)->get();
            $comments = DB::table('comments')->where('project_id','=',$id)->get();
            $category = DB::table("category")->get();
            return view('user.editProject',[
                "project"=>$project,
                "rewards" =>$rewards,
                "updates"=>$updates,
                "comments" =>$comments,
                "categories" =>$category,
            ]);
        });
        
        
        Route::post('/project/{id}/edit',function(Request $request,$id){
            $user = Auth::user();
            if ($request->hasFile('projectPhoto') && $request->file('projectPhoto')->isValid()) {
                $image_path = $request->projectPhoto->store('/projectsImg', ['disk' => 'public_uploads']);
            
                DB::table('projects')->where('id','=',$id)->update([
                    "name"=>$request->projectName,
                    "main_image"=>$image_path,
                    "shortcut"=>$request->projectShortcut,
                    "region"=>$request->projectPlace,
                    "category"=>$request->projectCategory,
                    "price"=>$request->projectPrice,
                    "deadline"=>$request->projectDeadline,
                    "description"=>$request->projectDescription,
                    
                ]);
            }else{
               
                DB::table('projects')->where('id','=',$id)->update([
                    "name"=>$request->projectName,
                    "shortcut"=>$request->projectShortcut,
                    "region"=>$request->projectPlace,
                    "category"=>$request->projectCategory,
                    "price"=>$request->projectPrice,
                    "deadline"=>$request->projectDeadline,
                    "description"=>$request->projectDescription,
                ]); 
                
            }
            
            return redirect('/project/'.$id.'/edit');
        });
        
        Route::get('/project/{id}/create/pledge',function(Request $request,$id){
            if (Auth::check()==false){
                $request->session()->flash('warning','Пожалуйста зарегестрируйтесь');
                return redirect('/');
            }
            $project = DB::table('projects')->where('id','=',$id)->get();
            foreach ($project as $val){
                if($val->creator_id != Auth::user()->id){
                    $request->session()->flash('warning','У вас нет прав !');
                    return redirect('/');
                }
            }
            return view('user.createPledge');
        });
        
        Route::get('/project/{id}/create/update',function(Request $request,$id){
            if (Auth::check()==false){
                $request->session()->flash('warning','Пожалуйста зарегестрируйтесь');
                return redirect('/');
            }
            $project = DB::table('projects')->where('id','=',$id)->get();
            foreach ($project as $val){
                if($val->creator_id != Auth::user()->id){
                    $request->session()->flash('warning','У вас нет прав !');
                    return redirect('/');
                }
            }
            return view('user.createUpdate');
        });
        
        Route::post('/project/{id}/create/update',function(Request $request,$id){
            $user = Auth::user();
            $project = DB::table('projects')->where('id','=',$id)->get();
            foreach ($project as $val ){
                $id = $val->id;
            }
            DB::table('news')->insert([
                "title"=>$request->title,
                "body"=>$request->description,
                "shortcut"=>$request->shortcut,
                "creator_id"=>$user->id,
                "project_id"=>$id,
                "created_at"=>new \DateTime(),

            ]);
            return redirect('/projects/');
        });
        
        Route::post('/pledge/manage/{id}',function(Request $request,$id){
            if (Auth::check()==false){
                $request->session()->flash('warning','Пожалуйста зарегестрируйтесь');
                return redirect('/');
            }
            $project = DB::table('rewards')->where('id','=',$id)->get();
            foreach ($project as $val){
                if($val->creator_id != Auth::user()->id){
                    $request->session()->flash('warning','У вас нет прав !');
                    return redirect('/');
                }
            }
            if(isset($request->visible)){
                DB::table("rewards")->where('id','=',$id)->update([
                        "visible"=>$request->visible,
                    ]);
            }
            return back();
        });
        Route::post('/comment/manage/{id}',function(Request $request,$id){
            if (Auth::check()==false){
                $request->session()->flash('warning','Пожалуйста зарегестрируйтесь');
                return redirect('/');
            }
            $commnets = DB::table('comments')->where('id','=',$id)->get();
            $projects = json_decode(Auth::user()->projects,1);
            $flag =0;
            foreach ($commnets as $val){
                foreach($projects as $key=> $project){
                    if($val->project_id == $project){
                        $flag =1;
                    }
                }
                if($flag==0){
                    
                    $request->session()->flash('warning','У вас нет прав !');
                    return redirect('/');
                }
            }
            if(isset($request->visible)){
                DB::table("comments")->where('id','=',$id)->update([
                        "visible"=>$request->visible,
                    ]);
            }
            return back();
        });
        Route::post('/project/{id}/create/pledge',function(Request $request,$id){
            $user = Auth::user();
            if ($request->hasFile('projectPhoto') && $request->file('projectPhoto')->isValid()) {
                $image_path = $request->projectPhoto->store('/projectsImg', ['disk' => 'public_uploads']);
            }else{
                $image_path ="/assets/img/B.png";
            }
            $project = DB::table('projects')->where('id','=',$id)->get();
            foreach ($project as $val ){
                $id = $val->id;
            }
            DB::table('rewards')->insert([
                "name"=>$request->pledgeName,
                "main_image"=>$image_path,
                "price"=>$request->price,
                "description"=>$request->description,
                "creator_id"=>$user->id,
                "project_id"=>$id,
                "created_at"=>new \DateTime(),

            ]);
            return redirect('/projects/');
        });

        Route::get('/user/profile/edit/{id}',function (Request $request,$id){
            if(Auth::user()->id == $id){
                $user_data=DB::table("users")->where("id","=",$id)->get();
                return view('profileEdit',[
                   "user_data" =>$user_data,
                ]);
            }
            $request->session()->flash('warning',"У вас нет прав ");
            return  redirect('/');
        });

        Route::post('/user/profile/edit/{id}',function (Request $request,$id){
            if(Auth::user()->id == $id){
                if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                    $path = $request->image->store('/profiles/user'.$id.'/', ['disk' => 'public_uploads']);

                    DB::table('users')->where("id","=",$id)->update([
                        "name" =>$request->name,
                        "avatar"=>$path,
                        "aboutme"=>$request->aboutme,
                        "motto"=>$request->motto,
                        "email"=>$request->email,
                        "updated_at"=> new \DateTime()
                    ]);
                }else{
                    DB::table('users')->where("id","=",$id)->update([
                        "name" =>$request->name,
                        "aboutme"=>$request->aboutme,
                        "motto"=>$request->motto,
                        "email"=>$request->email,
                        "updated_at"=> new \DateTime()
                    ]);
                }
                return redirect('/user/profile/edit/{id}');
            }
            $request->session()->flash('warning',"У вас нет прав ");
            return  redirect('/');
        });
        Route::post("/pocket/donate/{id}",function (Request $request, $id){
            DB::table('transactions')->insert([
                "user_id" =>$id,
                "receiver_id" =>$id,
                "price" => $request->cash,
                "purpose" => 0,
                "other_data" => json_encode(["phone"=>$request->phone,"name"=>$request->name],1),
            ]);
            $request->session()->flash("message"," Запрос отправлен ожидайте валидации ! ");
            return back();
        });
        Route::post("/pocket/pledge/{id}",function (Request $request, $id){
            $user=Auth::user();

            DB::table('transactions')->insert([
                "user_id" =>$user->id,
                "receiver_id" =>$id,
                "price" => $request->cash,
                "purpose" => 1,
                "other_data" => json_encode(["phone"=>$request->phone,"name"=>$request->name],1),
            ]);
            $request->session()->flash("message"," Запрос отправлен ожидайте валидации ! ");
            return back();
        });

    }
);
// admin
Route::group(
    [
        'middleware' => ['isAdmin'],
    ],
    function () {

        Route::get('/admin', function () {
            $news = DB::table('news')->latest('id')->get();
            return view('admin.main',[
                "news"=>$news,
            ]);
        });
        //transactions admin
        Route::get("/admin/transactions",function (){
            $data = DB::table("transactions")->get();
            return view("admin.transactions.transactionsMain",[
                "transactions" =>$data,
            ]);
        });

        Route::get("/admin/transactions/{id}",function ($id){
            $data = DB::table("transactions")->where("id","=",$id)->get();
            return view("admin.transactions.viewTransaction",[
                "transaction" =>$data,
            ]);
        });

        Route::post("/admin/transactions/{id}",function (Request $request,$id){
            $validation = $request->validation;
            DB::table("transactions")->where("id","=",$id)->update([
                "validation"=>$validation,
            ]);
            return redirect("/admin/transactions");
        });
        //projects admin

        Route::get('/admin/projects',function(){
            $projects = DB::table('projects')->latest('id')->get();
            return view('admin.projects.projectsMain',[
                'projects' =>$projects
            ]);
        });
        Route::get('/admin/projects/view/{id}',function($id){
            $projects = DB::table('projects')->where('id','=',$id)->get();
            return view('admin.projects.viewProject',[
                'project' =>$projects
            ]);
        });
        Route::post('/admin/projects/view/{id}',function(Request $request,$id){
            DB::table('projects')->where('id','=',$id)->update([
                "visible"=>$request->visible,
            ]);
            return redirect('/admin/projects');
        });
// news admin

        Route::get('/admin/news',function(){
            $news = DB::table('news')->latest('id')->get();
            return view('admin/main',[
                'news' =>$news
            ]);
        });

        Route::delete('/admin/news',function(Request $request){
            $id = array_search('delete',$request->all());
            $image = DB::table('news')->where('id','=',$id)->get('image');
            if ($image != NULL){
                Storage::disk('public_uploads')->delete($image[0]->image);
            }
            DB::table('news')->where('id','=',$id)->delete();
            return redirect('admin/news');
        });

        Route::get('/admin/news/create',function(){
            return view('admin.news.createNews');
        });

        Route::post("/admin/news/create",function(Request $request){
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $path = $request->image->store('/newsImg', ['disk' => 'public_uploads']);
            }else{
                $path = NULL;
            }
            DB::table('news')->insert([
                "title"=>$request->title,
                "body"=>$request->body,
                "shortcut"=>$request->shortcut,
                "image"=>$path,
                "visible"=>$request->visible,
                "created_at"=> new \DateTime()
            ]);

            return redirect('/admin/news');
        });


        Route::get('/admin/news/view/{id}',function($id){
            $news = DB::table('news')->where('id','=',$id)->get();
            return view('admin.news.viewNews',[
                "news"=>$news
            ]);
        });

        Route::get('/admin/news/edit/{id}',function($id){
            $news = DB::table('news')->where('id','=',$id)->get();
            return view('admin.news.editNews',[
                "news"=>$news
            ]);
        });

        Route::post('/admin/news/edit/{id}',function(Request $request, $id){
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image_path = DB::table('news')->where('id', '=', $id)->get('image');

                Storage::disk('public_uploads')->delete($image_path[0]->image);
                $path = $request->image->store('/newsImg', ['disk' => 'public_uploads']);
                DB::table('news')->where('id', '=', $id)->update([
                    'title' => $request->title,
                    'visible'=> $request->visible,
                    'body' => $request->body,
                    'image' => $path,
                    'shortcut'=> $request->shortcut,
                ]);
            }else{
                DB::table('news')->where('id', '=', $id)->update([
                    'title' => $request->title,
                    'visible'=> $request->visible,
                    'shortcut'=> $request->shortcut,
                    'body' => $request->body,
                ]);}
            return redirect('/admin/news/view/'.$id);
        });

// Products admin
        Route::get('/admin/products',function(){
            $products= DB::table('products')->get();
            return view('admin.products.productsMain',[
                "pages"=>$products,
            ]);
        });

        Route::get('/admin/products/create',function (){
            $categories = DB::table('category')->get();
            return view('admin.products.createProduct',[
                'categories' => $categories
            ]);
        });
        Route::post('/admin/products/create',function (Request $request){
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $name = $request->name;
                $category = $request->category;
                $subcategory = $request->subcategory;
                $price = $request->price; // FURTHER CHECK THAT HAVE ALL INTEGERS
                $description = $request->description;
                $path = $request->image->store('/productImg', ['disk' => 'public_uploads']);

                // $file = request()->file('uploadFile');
                // $file->store('toPath', ['disk' => 'my_files']);

                // !Storage::disk('public_uploads')->put($path, $file_content

                DB::table('products')->insert(
                    [
                        'name'=>$name,
                        'category'=>$category,
                        'subcategory'=>$subcategory,
                        'price'=>$price,
                        'description'=>$description,
                        'main_image'=>$path,
                        'visible'=>$request->visible,
                    ]
                );
            }
            return redirect('/admin/products');
        });


        Route::get('/admin/products/edit/{id}',function($id){
            $products = DB::table('products')->where('id','=',$id)->get();
            $categories=DB::table('category')->get();
            return view('admin.products.editProduct',[
                "categories"=>$categories,
                "product"=>$products
            ]);
        });

        Route::post('/admin/products/edit/{id}',function(Request $request, $id){
            $name = $request->name;
            $category = $request->category;
            $subcategory = $request->subcategory;
            $price = $request->price; // FURTHER CHECK THAT HAVE ALL INTEGERS
            $description = $request->description;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image_path = DB::table('products')->where('id', '=', $id)->get('main_image');

                Storage::disk('public_uploads')->delete($image_path[0]->main_image);
                $path = $request->image->store('/newsImg', ['disk' => 'public_uploads']);
                DB::table('products')->where('id', '=', $id)->update([
                    'name'=>$name,
                    'category'=>$category,
                    'subcategory'=>$subcategory,
                    'price'=>$price,
                    'description'=>$description,
                    'image'=>$path,
                    'visible'=>$request->visible,
                ]);
            }else{
                DB::table('products')->where('id', '=', $id)->update([
                    'name'=>$name,
                    'category'=>$category,
                    'subcategory'=>$subcategory,
                    'price'=>$price,
                    'description'=>$description,
                    'visible'=>$request->visible,
                ]);}
            return redirect('/admin/products/view/'.$id);
        });

        Route::post('/admin/products/edit/{$id}', function (Request $request,$id){
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $name = $request->name;
                $category = $request->category;
                $subcategory = $request->subcategory;
                $price = $request->price; // FURTHER CHECK THAT HAVE ALL INTEGERS
                $description = $request->description;
                $path = $request->image->store('/productImg', ['disk' => 'public_uploads']);

                // $file = request()->file('uploadFile');
                // $file->store('toPath', ['disk' => 'my_files']);

                // !Storage::disk('public_uploads')->put($path, $file_content

                DB::table('products')->insert(
                    [
                        'name'=>$name,
                        'category'=>$category,
                        'subcategory'=>$subcategory,
                        'price'=>$price,
                        'description'=>$description,
                        'image'=>$path,
                        'visible'=>$request->visible,
                    ]
                );
            }
            return redirect('/admin');
        });

        Route::get('/admin/products/view/{id}',function($id){
            $product = DB::table('products')->where('id','=',$id)->get();
            return view('admin.products.viewProduct',[
                "product"=>$product
            ]);
        });
        Route::DELETE('/admin/products',function (Request $request){
            $id = array_search('delete',$request->all());
            DB::table('products')->where('id','=',$id)->delete();
            return redirect('/admin');
        });
// change dropzone
        Route::post('/admin/product/dropzone/{productId}',function(Request $request,$productId){
            $image = $request->file('file');
            $main = DB::table('products')->where('id','=',$productId)->get('image');
            if($main[0]->image == NULL){
                $path = $image->store('/productImg', ['disk' => 'public_uploads']);
                DB::table('products')->where('id','=',$productId)->update([
                    'image'=>$path
                ]);
            }
            else{

                $avatarName = $image->store('/dropzone/product'.$productId, ['disk' => 'public_uploads']);
                $images = DB::table('products')->where('id','=',$productId)->get('otherImage');
                if ($images[0]->otherImage!=NULL){$img_arr = json_decode($images[0]->otherImage,TRUE);}
                $img_arr[] = $avatarName;

                // echo '<pre>';print_r($images);echo'</pre>';
                //  exit();
                DB::table('products')->where('id','=',$productId)->update([
                    'otherImage'=>json_encode($img_arr)
                ]);
            }
            return response()->json(['success'=>$avatarName]);
        });
//end product details

// Admin order
        Route::get('/admin/orders',function (){
            $order = DB::table('orders')->orderBy('id', 'desc')->get();
            return view('admin.orders.ordersMain',[
                "orders"=>$order,
            ]);
        });

        Route::get('/admin/orders/view/{id}',function ($id){
            $order = DB::table('orders')->where('id','=' ,$id)->get();
            return view('admin.orders.viewOrder',[
                "order"=>$order,
            ]);
        });

        Route::post('/admin/order/complete/{id}',function ($id){
            DB::table('orders')->where('id','=',$id)->update([
                "complete"=>TRUE,
            ]);
            return redirect('admin/orders/');
        });

// Admin category

        Route::get('/admin/category',function (){
            $category = DB::table('category')->orderBy('id', 'desc')->get();
            return view('admin.category.category',[
                "categories"=>$category,
            ]);
        });

        Route::get('/admin/category/create',function (){
            return view('admin.category.createCategory');
        });

        Route::post('/admin/category/create',function (Request $request){
            $subcat =array();
            $tmp=1;
            for ($i=1;$i<=$request->count;$i++){
                if($request[$i] !=NULL){
                    array_push($subcat,[
                        'subcategory' =>$request[$i],
                        'id'=>$tmp,
                    ]);
                    $tmp+=1;
                }
            }
            $category = $request->category;
            DB::table('category')->insert([
                "category" => $category,
                "subcategory" =>json_encode($subcat,1),
                "created_at"=>new \DateTime(),
            ]);
            return redirect('/admin/category');
        });

        Route::get('/admin/category/edit/{id}',function ($id){
            $category = DB::table('category')->where('id','=' ,$id)->get();
            return view('admin.category.editCategory',[
                "category"=>$category,
            ]);
        });

        Route::post('/admin/category/edit/{id}',function (Request $request,$id){
            $subcat =array();
            $tmp=1;
            for ($i=1;$i<=$request->count;$i++){
                if($request[$i] !=NULL){
                    array_push($subcat,[
                        'subcategory' =>$request[$i],
                        'id'=>$tmp,
                    ]);
                    $tmp+=1;
                }
            }
            $category = $request->category;
            DB::table('category')->where('id','=',$id)->update([
                "category" => $category,
                "subcategory" =>json_encode($subcat,1),
                "updated_at"=>new \DateTime(),
            ]);
            return redirect('/admin/category');
        });
        Route::post('/admin/category/delete/{id}',function ($id){

            DB::table('category')->where('id','=',$id)->delete();
            return redirect('admin/category/');
        });
        Route::post('/admin/subacategory/createPage',function (Request $request){
            $category = $request->category;
            $result ='';
            $subcategory = DB::table('category')->where('category','LIKE',$category)->get();
            foreach ($subcategory as $val){
                $temp = json_decode($val->subcategory,1);
                foreach ($temp as $subcategory){
                    $result .='<option value="'.$subcategory['subcategory'].'"> '.$subcategory['subcategory'].' </option>';
                }
            }
            return $result;
        });

        Route::post('/admin/subacategory/editPage',function (Request $request){
            $itemSubcat = $request->subcategory;
            $category = $request->category;
            $result ='';
            $subcategory = DB::table('category')->where('category','LIKE',$category)->get();
            foreach ($subcategory as $val){
                $temp = json_decode($val->subcategory,1);
                foreach ($temp as $subcategory){
                    if (strcmp($itemSubcat, $subcategory['subcategory']) == 0){
                        $result .='<option value="'.$subcategory['subcategory'].'" autocomplete="off"  selected="selected"> '.$subcategory['subcategory'].' </option>';
                    }else{
                        $result .='<option value="'.$subcategory['subcategory'].'" autocomplete="off"> '.$subcategory['subcategory'].' </option>';
                    }
                }
            }
            return $result;
        });

    }
);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();
//
Route::resource('editor','ckeditor');
Route::post('/ckeditor/image_upload',"ckeditor@upload")->name('upload');
