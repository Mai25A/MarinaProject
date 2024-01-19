<style>
    body {
        width: 100vw;
        overflow-x: hidden;
    }

    .container-lg {
        font-size: 20px;
        margin-top: 48px;
    }

    .image_dt {
        width: 450px;
        height: 350px;
    }

    .image_dt img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
        margin-left: -15px;
    }

    .detail_item {
        display: flex;
    }

    .name_price {
        display: flex;
        justify-content: space-around;


    }

    .name_price h4 {
        text-align: end;
    }

    .total_dispoint,
    .dispoint {
        /* background-color: blue; */
        float: right;
    }

    .btn_chosen button {
        width: 200px;
        border-radius: 10px;
    }

    .btn_chosen .btn_menu {
        background-color: #26577C;
        color: white;
    }

    .card-item-dish {
        border-radius: 10px;
        border: 0;
        height: 300px;
        transition: transform 0.3s ease;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 5px;
        cursor: pointer;
    }

    .card-item-dish:hover {
        box-shadow: rgba(100, 100, 111, 0.2) 2px 2px 20px 2px;
        transform: scale(1.02);
    }

    .quantity_bx button {
        border: 1px solid #26577C;
        background-color: white;
        width: 25px;
        height: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #26577C;
    }

    .check_qty {
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
        align-items: flex-end;
    }

    .quantity_bx input {
        border: 1px solid #26577C;
        border-left: none;
        border-right: none;
        display: flex;
        font-size: 15px;
        width: 100px;
        height: 25px;
    }

    .quantity_bx .minus-btn {
        border-right: none;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .quantity_bx .plus-btn {
        border-left: none;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .quantity_bx{
        display: flex;
        justify-content:flex-end;
        align-items:center;
    }
    .menu_image {
        width: 100%;
        height: 200px;
    }

    .menu_image img {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        object-fit: cover;
    }

    .menu_title button {
        border: none;
        background-color: white;
    }

    .list_dishes {
        width: 110%;
    }

    .ard-item-dish .card-title p {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>