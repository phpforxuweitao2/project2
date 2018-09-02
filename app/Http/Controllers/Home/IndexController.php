<?php
/*  User: tao    Date: 2018/8/23   Time: 22:25  */


namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cache;
use Cookie;
class IndexController extends Controller
{
    //���޼��ݹ鷽��
    public function getCatesBypid($pid){
        $s = DB::table('cates')->where('pid','=',$pid)->orderBy('id','asc')->get();
        //����
        $data=[];
        foreach($s as $key=>$value){
            $value->dev=$this->getCatesBypid($value->id);
            $data[]=$value;
        }
        return $data;
    }

    /**
     * ǰ̨��ҳ
     * @return [type] [description]
     */
    public function index(Request $req) {
        // ��ȡ��Ŀ���������
        $cate = $this->getCatesBypid(0);
        // �����������
        $data = DB::table('cates')->where('status', '3')->limit(5)->get();
        // ԭ���Ƽ������ĵ�����
        $data_recommand = DB::table('content')->where('recommand', '=', '1')->limit(8)->get();
        // ԭ���µ��ֲ�
        $new = DB::table('content as c')
                    ->join('users_detail as u','c.uid','=','u.uid')
                    ->where('c.is_admin','0')
                    ->where('c.status','0')
                    ->orderBy('c.id','desc')
                    ->select('c.title','c.created_at','u.nickname','u.uface','c.uid','c.id')
                    ->limit(10)
                    ->get();
        // ��ҳ�ֲ�ͼ
        $pic = DB::table('lunbo')
                    ->where('status','0')
                    ->limit(4)
                    ->get();
        // ��ȡ��ҳ�Ĺ���
        $notice = DB::table('notice')
                    ->orderBy('id','desc')
                    ->limit(3)
                    ->get();
        return view('home.index.index',[
            'cates' => $cate,
            'data' => $data,
            'data_recommand' => $data_recommand,
            'new'   => $new,
            'pic'   => $pic,
            'notice'=> $notice
        ]);
    }

    /**
     * ǰ̨ajax��ȡ��������
     * @param $id
     */
    public function show() {
        $data = DB::table('notice')
                    ->where('id',$_GET['id'])
                    ->first();
        $data->created_at = date('Y/m/d',$data->created_at);
        return json_encode($data);
    }


}
