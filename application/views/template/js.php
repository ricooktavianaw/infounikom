<script type="text/javascript" src="<?php echo base_url() ?>mhs/js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>mhs/js/html5shiv.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>mhs/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>mhs/js/fancydropdown.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>mhs/js/jquery.easing-1.3.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>mhs/js/functions.js" ></script>
<script type="text/javascript">
    /* <![CDATA[ */
    /*global $:false */
    $(function() {
        "use strict";
        //caching
        //next and prev buttons
        var $cn_next = $('#cn_next');
        var $cn_prev    = $('#cn_prev');
        //wrapper of the left items
        var $cn_list    = $('#cn_list');
        var $pages      = $cn_list.find('.cn_page');
        //how many pages
        var cnt_pages   = $pages.length;
        //the default page is the first one
        var page        = 1;
        //list of news (left items)
        var $items      = $cn_list.find('.cn_item');
        //the current item being viewed (right side)
        var $cn_preview = $('#cn_preview');
        //index of the item being viewed. 
        //the default is the first one
        var current     = 1;
        /*
        for each item we store its index relative to all the document.
        we bind a click event that slides up or down the current item
        and slides up or down the clicked one. 
        Moving up or down will depend if the clicked item is after or
        before the current one
        */
        $items.each(function(i){
            var $item = $(this);
            $item.data('idx',i+1);
            
            $item.bind('click',function(){
                var $this       = $(this);
                $cn_list.find('.selected').removeClass('selected');
                $this.addClass('selected');
                var idx         = $(this).data('idx');
                var $current    = $cn_preview.find('.cn_content:nth-child('+current+')');
                var $next       = $cn_preview.find('.cn_content:nth-child('+idx+')');
                
                if(idx > current){
                    $current.stop().animate({'top':'-357px'},600,'easeOutBack',function(){
                        $(this).css({'top':'357px'});
                    });
                    $next.css({'top':'357px'}).stop().animate({'top':'0px'},600,'easeOutBack');
                }
                else if(idx < current){
                    $current.stop().animate({'top':'357px'},600,'easeOutBack',function(){
                        $(this).css({'top':'357px'});
                    });
                    $next.css({'top':'-357px'}).stop().animate({'top':'0px'},600,'easeOutBack');
                }
                current = idx;
            });
        });
        /*
        shows next page if exists:
        the next page fades in
        also checks if the button should get disabled
        */
        $cn_next.bind('click',function(e){
            var $this = $(this);
            $cn_prev.removeClass('disabled');
            ++page;
            if(page === cnt_pages)
                { $this.addClass('disabled'); }
            if(page > cnt_pages){ 
                page = cnt_pages;
                return;
            }   
            $pages.hide();
            $cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
            e.preventDefault();
        });
        /*
        shows previous page if exists:
        the previous page fades in
        also checks if the button should get disabled
        */
        $cn_prev.bind('click',function(e){
            var $this = $(this);
            $cn_next.removeClass('disabled');
            --page;
            if(page === 1)
                { $this.addClass('disabled'); }
            if(page < 1){ 
                page = 1;
                return;
            }
            $pages.hide();
            $cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
            e.preventDefault();
        });
    });
    /* ]]> */
</script>
