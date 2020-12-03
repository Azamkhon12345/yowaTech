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

Route::get('/', function () {
    return view('home');
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
    $products = DB::table('projects')->where('visible','=',1)->paginate(15);
    return view('projects',[
        'projects'=>$products,
    ]);
});
Route::get('/projects/view/{id}', function (Request $request,$id) {
    $products = DB::table('projects')
        ->where('visible','=',1)
        ->where('id','=',$id)
        ->get();
    return view('projectView',[
        'project'=>$products,
    ]);
});

Route::get('/user/profile/{id}',function (Request $request,$id){
    $user_data = DB::table("users")->where('id','=',$id)->get();
    $user_projects = DB::table('projects')->where('creator_id','=',$id)->get();
    return view('userProfile',[
        "user_data"=>$user_data,
        "user_projects"=>$user_projects,
    ]);
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
            return view('createProject');
        });
        Route::post('create-project',function(Request $request){
            if ($request->hasFile('projectPhoto') && $request->file('projectPhoto')->isValid()) {
                $image_path = $request->projectPhoto->store('/projectsImg', ['disk' => 'public']);
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
                "creator_id"=>Auth::user()->id,
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
        Route::post("/pocket/donate/{id}",function (){

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

Auth::routes();
//
Route::resource('editor','ckeditor');
Route::post('/ckeditor/image_upload',"ckeditor@upload")->name('upload');
