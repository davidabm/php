<div class="page">
	<div class="page__hd">
        <h1 class="page__title">
            排名检索
        </h1>
        <p class="page__desc">WeUI 是一套同微信原生视觉体验一致的基础样式库，由微信官方设计团队为微信内网页和微信小程序量身设计，令用户的使用感知更加统一。</p>
    </div>
	<div class="weui-cells__title">姓名</div>

<?php echo validation_errors(); ?>
<?php echo form_open('stu/search'); ?>
	<div class="weui-cells">
	    <div class="weui-cell">
	        <div class="weui-cell__bd">
	            <input class="weui-input" name="number" type="text" placeholder="请输入学号"/>
	        </div>
	    </div>
	    <div class="weui-cell">
	        <div class="weui-cell__bd">
	            <input class="weui-input" name="name" type="text" placeholder="请输入姓名"/>
	        </div>
	    </div>
	</div>
	<div class="weui-btn-area">
	    <input class="weui-btn weui-btn_primary" type="submit" name="submit" href="javascript:" id="showTooltips" value="抽签">
	</div>
</form>
</div>
