<script>
    document.addEventListener("DOMContentLoaded", function () {
        var sidebarMenu = document.getElementById("sidebar-menu");
        var userMenu = sidebarMenu.querySelector("a[href='../../controllers/user/post.controller.php']");
        var tablesMenu = sidebarMenu.querySelector("a[href='../../controllers/tables/table.controller.php']");
        var menuMenu = sidebarMenu.querySelector("a[href='../../controllers/menu/menu.admin.controller.php']");

        userMenu.addEventListener("click", function (event) {
            event.preventDefault();
            var userMenuParent = userMenu.parentNode;
            var userSubMenu = userMenuParent.querySelector(".nav-second-level");

            if (userSubMenu.style.display === "block") {
                userSubMenu.style.display = "none";
                userMenuParent.classList.remove("active");
            } else {
                userSubMenu.style.display = "block";
                userMenuParent.classList.add("active");
            }
        });

        tablesMenu.addEventListener("click", function (event) {
            event.preventDefault();
            var tablesMenuParent = tablesMenu.parentNode;
            var tablesSubMenu = tablesMenuParent.querySelector(".nav-second-level");

            if (tablesSubMenu.style.display === "block") {
                tablesSubMenu.style.display = "none";
                tablesMenuParent.classList.remove("active");
            } else {
                tablesSubMenu.style.display = "block";
                tablesMenuParent.classList.add("active");
            }
        });

        menuMenu.addEventListener("click", function (event) {
            event.preventDefault();
            var menuMenuParent = menuMenu.parentNode;
            var menuSubMenu = menuMenuParent.querySelector(".nav-second-level");

            if (menuSubMenu.style.display === "block") {
                menuSubMenu.style.display = "none";
                menuMenuParent.classList.remove("active");
            } else {
                menuSubMenu.style.display = "block";
                menuMenuParent.classList.add("active");
            }
        });
    });
</script>