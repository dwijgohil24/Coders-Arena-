 
document.addEventListener('DOMContentLoaded',function(){
 
    //Initialize Fixed floating btn
    const shareButtons = document.querySelector('.fixed-action-btn');
    M.FloatingActionButton.init(shareButtons,{
        hoverEnabled:false
    });
     
     
    //Getting page information
    let current_url = window.location.href;
    let currentPage_title = document.title;
     
    //Get icon ids
    let facebook = document.getElementById('fb');
    let twitter = document.getElementById('tw');
    let whatsapp = document.getElementById('wts');
    let linkedIn = document.getElementById('lnk');
    let googlePlus = document.getElementById('gp');
     
    //Facebook
    facebook.addEventListener('click',function(){
        let fb_shareUrl = "https://www.facebook.com/sharer/sharer.php?u="+current_url;
        let window_size = "width=565,height=569";
        window.open(fb_shareUrl,"","menubar=no,resizeable=yes,scrollbars=yes,"+window_size);
        return false;
    });
     
     
    //Twitter
    twitter.addEventListener('click',function(){
        let tw_shareUrl = "https://twitter.com/intent/tweet?text="+currentPage_title+"&url="+current_url;
        let window_size = "width=565,height=569";
        window.open(tw_shareUrl,"","menubar=no,resizeable=yes,scrollbars=yes,"+window_size);
        return false;
    });
     
     
    //Whatapp
    whatsapp.addEventListener('click',function(){
        let wts_shareUrl = "whatsapp://send?text="+current_url;
        let window_size = "width=565,height=569";
        window.open(wts_shareUrl,"","menubar=no,resizeable=yes,scrollbars=yes,"+window_size);
        return false;
    });
     
     
    //LinkedIn
    linkedIn.addEventListener('click',function(){
        let lnk_shareUrl = "https://www.linkedin.com/cws/share?url="+current_url;
        let window_size = "width=565,height=569";
        window.open(lnk_shareUrl,"","menubar=no,resizeable=yes,scrollbars=yes,"+window_size);
        return false;
    });
     
     
    //Google Plus
    googlePlus.addEventListener('click',function(){
        let gp_shareUrl = "https://plus.google.com/share?url="+current_url;
        let window_size = "width=565,height=569";
        window.open(gp_shareUrl,"","menubar=no,resizeable=yes,scrollbars=yes,"+window_size);
        return false;
    });
     
     
    });
        