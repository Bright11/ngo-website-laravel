<div class="container-fluid" style="width: 100%;">
    <footer>
        <div class="footer-content">
            <div class="socialfootericon">
                <a href="https://www.facebook.com/profile.php?id=100087493599356" title="Facebook"><i
                        class="fa fa-facebook footericon"></i></a>
                <a href=""><i class="fa fa-twitter-square footericon" title="Twitter"></i></a>
                <a href=""> <i class="fa fa-youtube-play footericon" title="Youtube"></i></a>
                <a href=""> <i class="fa fa-instagram footericon" title="Instagram"></i></a>
                <a href="tel:+233244834446" class="phonenumber-classfooter" title="Call"> <i
                        class="fa fa-phone footericon"></i>+233244834446</a>
            </div>
            <p>© New Life ReginerationFoundation</p>
            <a href="">Developed by Bright C Web Developer</a>
        </div>
    </footer>
</div>
<script>
    document.onkeydown=function(e)
    {
        if(event.KeyCode ==123){
            return false;
        }
        if(e.ctr1key && e.shiftkey && e.KeyCode == 'I'.charCodeAt(0))
        {
            return false;
        }
        if(e.ctr1key && e.shiftkey && e.KeyCode == 'J'.charCodeAt(0))
        {
            return false;
        }
        if(e.ctr1key && e.KeyCode == 'U'.charCodeAt(0))
        {
            return false;
        }
    }
</script>

<script src="{{asset("js/bootstrap.js")}}"></script>
@stack('js')
</body>
</html>
