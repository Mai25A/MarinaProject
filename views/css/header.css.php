<style>
    .img {
        width: 99vw;
        height: 70vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('http://localhost:3000/php_course/MARINA/example/asset/background.jpg');
    }

    .header {
        background-color: #26577C;
        padding: 10px;
    }

    h3 {
        display: flex;
        justify-content: center;
        padding-top: 140px;
        font-size: 60px;
    }

    h3 {  
        color: red;
        animation: myAnimation 5s infinite;
    }

    @keyframes myAnimation {
        0% {
            color: red;
        }

        25% {
            color: yellow;
        }

        50% {
            color: blue;
        }

        100% {
            color: green;
        }
    }

    .menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }


    .logo {
        height: 50px;
        width: auto;
        padding-left: 30px;
    }

    .mainMenu {
        list-style-type: none;
        display: flex;
        padding: 0;
        padding-right: 200px;
        size: 20px;
    }

    .mainMenu li {
        position: relative;
        margin-right: 30px;
    }

    .mainMenu a {
        font-size: 15px;
        color: white;
        text-decoration: none;
        padding: 10px;
    }

    .childMenu {
        display: none;
        position: absolute;
        list-style: none;
        background-color: #26577C;
        padding: 10px;
        top: 100%;
        left: 0;
    }

    .mainMenu li:hover .childMenu {
        display: block;
    }

    .childMenu a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 5px;
    }
</style>