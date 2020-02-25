<?php
    echo '
    <footer class="footer_web_page">
        <div class="Layout_Center">
            <p>© 2019 Шолохов Даниил.</p>
        </div>
    </footer>
    <script src="'.Head::GETURL().'/js/script.js"></script>
    <script src="'.Head::GETURL().'/js/Source/editCard.js"></script>
        <script>
        window.onscroll = function() {
            StartUpScripts();
        }
        function NewStyleMenu() {
            var top_menu = document.getElementById("top_menu");
            var heightBlock = top_menu.offsetHeight / 3;
            scrolled = window.pageYOffset;
            if (scrolled >= heightBlock) {
                top_menu.style.backgroundColor = "rgba(0,0,0,.6)";
                top_menu.style.borderBottom = "2px solid rgba(192,0,205, 1)";
            } else if (scrolled < heightBlock) {
                top_menu.style.borderBottom = "0px solid rgba(192,0,205, 0)";
                top_menu.style.backgroundColor = "transparent";
            }
        }
    </script>
</body>';