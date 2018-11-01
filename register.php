<?php include ("header.php");?>

<div id="register">
	<form>
    
		<div id="register_right">ثبت آگهی
			<div>گروه بندی</div>
    		<div id=""><input id="grouhbandi" type="text"  placeholder="انتخاب کنید" style="font-size:18px;"></input></div>
    		<div>عنوان آگهی</div>
    		<div id=""><input id="onvanagahi" placeholder="عنوان مناسبی برای آگهی تان وارد کنید." style="font-size:18px;" type="text" ></input></div>
    		<div>توضیحات</div>
    		<div><textarea id="tozihat" placeholder="توضیحات مناسبی برای آگهی تان وارد کنید." style="font-size:18px;"></textarea></div>
    		<div>انتخاب مکان</div>
    		<div id=""><input id="entekhbmakan" type="text"  placeholder="انتخاب کنید" style="font-size:18px;"></input></div>
		</div>

	


		<div id="register_left">
        	<div id="pictiors">
				<div id="top_pictiors">عکس آگهی</div>
                <div class="pic" id="pic_1"> + افزودن عکس</div>
                <div class="pic"></div>
                <div class="pic"></div>
                <div class="pic"></div>
                
                <div id="txt_pic"><b style="font-size:18px;">یک تصویر بهتر از هزار کلمه.</b> با قرار دادن عکس شانس دیده شدن 			آگهی خود را<b style="font-size:18px;"> 5 برابر</b> کنید.</div>
                
                <img src="image/sabtAgahi.PNG" width="484" height="158" color="red" alt=""/>
            </div>
            <div style="padding-left:53px;padding-top:40px;"><button class="button_pic">ثبت آگهی</button></div>
        </div>    
	</form>
</div>

<?php include ("footer.php");?>