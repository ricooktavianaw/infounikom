<!-- start div #main-title -->
<div class="main-title">
    <p>Login</p>
</div>
<!-- end div #main-title -->

<!-- start div #main -->
<div id="main">
    <div class="main-content">
        <div class="contact-content">
            <div class="marked-title">
                <h3>Login</h3>
            </div>
            <div class="contact-form">
                <form method="post" action="<?php echo base_url() ?>login/process">
                    <div class="top-form">
                        <input class="field" type="text" name="username" value="Username" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <input class="field" type="password" name="password" value="Password" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">                         
                        <div class="clear"></div>
                    </div>
                    <button class="btn submit" type="submit">Masuk</button>
                </form>
                <div class="clear"></div>
            </div>
        </div>    	
    </div>
</div>
<!-- end div #main --> 