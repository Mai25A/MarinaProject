<style>
    .container {
        margin-top: 48px;
    }


    .custom-button {
        height: 35px;
        width: 150px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        border: 1px solid #26577C;
        background-color: white;
    }
    .btn_type:focus {
        background-color: #26577C;
        color: white;
        text-align: center;
        justify-content: center;
    }
    .button_con {
        display: flex;
        gap:24px;
    }

    .form-select {
        float: right;
    }

    .list-item {
        border-radius: 10px;
        border: 0;
        height: 390px;
        transition: transform 0.3s ease;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 5px;
        cursor: pointer;
        /* border-bottom: 4px solid blue; */
        /* box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.2); */
    }

    .list-item:hover {
        box-shadow: rgba(100, 100, 111, 0.2) 2px 2px 20px  2px;
        transform: scale(1.02);


    }
    body{
     
        width: 100vw;
        overflow-x: hidden;
    }
    .box_products{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        padding-top: 40px;
        /* padding: 30px; */
        flex-wrap: wrap;
        gap: 30px;
        /* width: 2000px !important; */
        
    }
    .card{
        width: 21rem;

    }
    .image-item {
        margin: 10px;
        width: 90%;
        height: 60%;
        /* background-color: aqua; */
        margin: 0 auto;
        margin-top: 20px;
    }
    .image-item img {
        border-radius: 10px;
        width: 100%;
        height: 100%;   
        object-fit: cover;
    }
</style>