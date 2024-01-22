<style>
    header {
        position: relative;
    }

    .img {
        width: 99vw;
        height: 70vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('../../asset/background.jpg');
    }

    .header {
        /* background-color: #3399FF; */

        background-color: #26577C;
        padding: 10px;
    }

    #loginModal {
        position: absolute;
        width: 500px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #loginModal {
        display: none;
        pointer-events: none;
        opacity: 0;
    }

    .show {
        display: block !important;
        pointer-events: all !important;
        opacity: 1 !important;
    }

    @font-face {
        font-family: 'Pacifico';
        src: url('path/to/pacifico.ttf') format('truetype');
    }

    .img h3 {
        display: flex;
        justify-content: center;
        padding-top: 140px;
        font-size: 100px;
        font-family: 'Pacifico', cursive;
    }

    .img h3 {
        color: #26577C;
        animation: myAnimation 5s infinite;
    }

    @keyframes myAnimation {
        0% {
            color: #e4c1f9;
        }

        12.5% {
            color: #a9def9;
        }

        25% {
            color: #d0f4de;
        }

        37.5% {
            color: #fcf6bd;
        }

        50% {
            color: #ff99c8;
        }

        62.5% {
            color: #e4c1f9;
        }

        75% {
            color: #a9def9;
        }

        87.5% {
            color: #d0f4de;
        }

        100% {
            color: #fcf6bd;
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
        size: 25px;
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

    .mainMenu li a:hover {
        color: red;
        text-decoration: none;
    }


    .mainMenu li:hover .childMenu {
        display: block;
        color: brown;
    }

    .childMenu a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 5px;
    }
</style>