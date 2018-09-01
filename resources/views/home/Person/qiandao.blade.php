@extends('home.PersonPublic.index')
@section('title','粉丝关注') 
@section('container')
  <div class="ab_right">
  <div class="shop-nav"><a>签到记录</a></div>
    <div class="newArticle_cz">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" id="hy_table" class="hy_table">
              <thead>
                <tr>
                  <td width="5%">排序</td>
                	<td width="10%">用户名</td>
                	<td width="10%">赠送积分</td>
                	<td width="10%">签到日期</td>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td class="hy_title">7799</td>
                  <td>admin123</td>
                  <td>17</td>
                  <td>2018-08-24 15:34:52</td>
                </tr>
                
              </tbody> 
            </table>
      <div class="ar_bjPage">
       <span>共 1 页/1条记录</span>
      </div>
    </div>
  </div>
@endsection