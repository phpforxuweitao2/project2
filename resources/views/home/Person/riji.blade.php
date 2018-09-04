@extends('home.PersonPublic.index')
@section('title','日记投稿')
 @section('container')
  <div class="ab_right">
    <div class="shop-nav"><a>日记投稿</a></div>
    <div class="add_con">
      <form name="form1" action="/ps_riji/doadd" method="post" enctype="multipart/form-data">
        <input name="uname" value="admin" type="hidden">
        <input name="writer" class="author_ipt" id="writer" size="30" value="一年级小学生" type="hidden">
        <div class="form_top1">
          <div class="top1Left" style="width: 620px">
            <div id="selects" style="width: 220px;height: 30px;float: left;">
              <select name="cid" id="" class="selecting" style="width: 150px;height: 30px;border-radius: 4px;">
                <option value="30" class="options">一年级日记</option>
                <option value="31" class="options">二年级日记</option>
                <option value="32" class="options">三年级日记</option>
                <option value="33" class="options">四年级日记</option>
                <option value="34" class="options">五年级日记</option>
                <option value="35" class="options">六年级日记</option>
                <option value="37" class="options">初一日记</option>
                <option value="38" class="options">初二日记</option>
                <option value="39" class="options">初三日记</option>
                <option value="41" class="options">高一日记</option>
                <option value="42" class="options">高二日记</option>
                <option value="43" class="options">高三日记</option>
              </select>
            </div>
            <div class="selects" style="width: 190px;height: 30px;float: left;">
              <select name="week" id="" class="selecting" style="width: 120px;height: 30px;border-radius: 4px;">
                <option value="星期一" class="options">星期一</option>
                <option value="星期二" class="options">星期二</option>
                <option value="星期三" class="options">星期三</option>
                <option value="星期四" class="options">星期四</option>
                <option value="星期五" class="options">星期五</option>
                <option value="星期六" class="options">星期六</option>
                <option value="星期日" class="options">星期日</option>
              </select>
            </div>
            <div class="selects" style="width: 200px;height: 30px;float: left;">
              <select name="weather" id="" class="selecting" style="width: 120px;height: 30px;border-radius: 4px;">
                <option value="晴" class="options">晴</option>
                <option value="多云" class="options">多云</option>
                <option value="阴" class="options">阴</option>
                <option value="雨" class="options">雨</option>
                <option value="雪" class="options">雪</option>
              </select>
            </div>
            <div class="publish-title" style="clear: both">
              <input name="title" title="请输入日记标题" id="title" placeholder="请输入日记标题" type="text">
            </div>
          </div>
          <!--<div class="top1Right">

            <div class="rj_sx">字数：<span id="counter" style="color:#F00">0</span>字</div>
          </div>-->
          <div class="clear"></div>
        </div>
        <div class="hy_tearea">
          <textarea id="text_body" name="content" cols="92" rows="5" placeholder="请输入日记内容" onkeydown="countChar('text_body','counter');" onkeyup="countChar('text_body','counter');" onfocus="inputAutoClear(this)"></textarea>
        </div>
        <div class="hy_sm">字数：<span id="counter" style="color:#F00">0</span>字</div>
        <div class="button_area">
          <input name="dede_addonfields" value="" type="hidden">
          {{csrf_field()}}
          <input name="dede_fieldshash" value="e52d77bcf131d8cb793501dc3758c148" type="hidden">          
          <button class="editPassword-submit" type="button" onclick="format('text_body')">排版</button>
          <button class="editPassword-reset" type="submit" id="btnSubmit">提交</button>
        </div>
        <div class="clear"></div>
      </form>
    </div>
  </div>
</div>


<div id="winpop" style="height: 0px; display: none;">
 <div class="title">《日记网》投稿须知<span class="close" onclick="tips_pop()">X</span></div>
    <div class="con">
    ① 要求字数100字以上，内容原创<br>
    ② 请认真选择年级分类<br>
    ③ 投稿前请备份，未通过的投稿会被直接删除<br>
    ④ <font color="#FF7E69"> <strong>转载抄袭，可能会被扣除积分、限制投稿！</strong></font>
    </div>
</div>
@endsection

