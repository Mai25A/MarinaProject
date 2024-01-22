<style>
    
    #sidebar-menu .nav-second-level {
        display: none;
        padding-left: 30px;
    }

    #sidebar-menu .nav-second-level li {
        position: relative;
    }

    #sidebar-menu .nav-second-level li a {
        padding: 8px 15px;
        color: #555;
        display: block;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    #sidebar-menu .nav-second-level li a:hover {
        background-color: black;
    }

    #sidebar-menu .nav-second-level li.active a {
        background-color: #f8f8f8;
    }

    #sidebar-menu .nav-second-level li.active ul {
        display: block;
    }

    #sidebar-menu .nav-second-level {
        display: none;
        padding-left: 30px;
    }

    #sidebar-menu .nav-second-level li {
        position: relative;
    }

    #sidebar-menu .nav-second-level li a {
        padding: 8px 15px;
        color: #555;
        display: block;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    #sidebar-menu .nav-second-level li a:hover {
        background-color: white;
    }

    #sidebar-menu .nav-second-level li.active a {
        background-color: white;
    }

    #sidebar-menu .nav-second-level li.active ul {
        display: block;
    }

    .left-side-menu {
        width: 240px;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background-color:#86B6F6;
        overflow-x: hidden;
        overflow-y: auto;
        z-index: 999;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .slimscroll-menu {
        overflow-y: auto;
        max-height: calc(100% - 60px);
    }

    #sidebar-menu {
        padding-top: 20px;
    }

    #sidebar-menu ul {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    #sidebar-menu li {
        position: relative;
    }

    #sidebar-menu li a {
        display: block;
        padding: 10px 15px;
        color: black;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    #sidebar-menu li a:hover {
        background-color: white;
    }

    #sidebar-menu li a i {
        margin-right: 10px;
    }

    #sidebar-menu li a .menu-arrow {
        float: right;
        margin-top: 2px;
    }

    #sidebar-menu .nav-second-level {
        padding-left: 15px;
        display: none;
    }

    #sidebar-menu .nav-second-level li {
        position: relative;
    }

    #sidebar-menu .nav-second-level li a {
        padding: 8px 15px;
        color:  black;
        display: block;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    #sidebar-menu .nav-second-level li a:hover {
        background-color: white;
    }

    #sidebar-menu .nav-second-level li a i {
        margin-right: 10px;
    }

    #sidebar-menu .nav-second-level li.active a {
        background-color: black;
    }

    #sidebar-menu .nav-second-level li.active ul {
        display: block;
    }

    @media (max-width: 991px) {
        .left-side-menu {
            width: 100%;
            height: auto;
            position: relative;
            float: none;
            border-bottom: 1px solid #eee;
        }

        .slimscroll-menu {
            overflow-y: hidden;
            max-height: none;
        }

        #sidebar-menu .nav-second-level {
            padding-left: 0;
        }
    }
</style>