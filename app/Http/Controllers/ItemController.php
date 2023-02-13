<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Image;
use App\Models\Item;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;

class ItemController extends Controller
{
    /**
    * 商品一覧
    *
    * @param Request $request
    * @return view
    */
    public function index(Request $request)
    {
        $items = Item::orderBy('created_at', 'asc')->get();

        //サイドバーにログイン情報表示
        $user = $request->session()->get('user');

        return view('items.index', ['items' => $items,], compact('user'));
    }

    /**
     * 商品登録画面
     *
     * @param Request $request
     * @return view
     */
    public function index_r(Request $request)
    {
        //サイドバーにログイン情報表示
        $user = $request->session()->get('user');
        
        return view('item.index', compact('user'));
    }

    /**
     * 商品編集画面
     *
     * @param Request $request
     * @param [type] $id
     * @return view
     */
    public function index_u(Request $request, $id)
    {
        //サイドバーにログイン情報表示
        $user = $request->session()->get('user');

        $items=DB::table('items')->where('id',$id)->get();
        return view('item.update',['form'=>$items], compact('user'));
    }

    /**
     * 商品の新規登録
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        // バリデーション
        $validate_rule=[
            'name' => 'required',
            'type' => 'required|numeric|between:1,9',
            'price' => 'required|numeric',
            'image' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $user = $request->session()->get('user');
        $create = [
                'user_id'=>$user->id,
                'user_name'=>$user->name,
                'name' => $request->name,
                'type' => $request->type,
                'price' => $request->price,
                'image' => $request->image->store('public'),
                'detail' => $request->detail
            ];

            DB::table('items')->insert ($create);
        return redirect('/item_list');
    }

    /**
     * 商品の更新
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update(Request $request,$id)
    {
        if ($request->has('button1')) {

            $validate_rule=[
                'name' => 'required',
                'type' => 'required|numeric|between:1,9',
                'price' => 'required|numeric',
            ];
            $this->validate($request, $validate_rule);
            $items=Item::where('id',$id)->first();
            $items->name = $request->name;
            $items->type = $request->type;
            $items->price = $request->price;
            
            if (isset($request->image)) {
                $items->image = $request->image->store('public');
            }
            
            $items->detail = $request->detail;
            $items->save();
            return redirect('/item_list');

        } elseif ($request->has('button2')) {
            
            DB::table('items')->where('id',$id)->delete();
            return redirect('/item_list');
        } 
    }

}
