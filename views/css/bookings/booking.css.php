<style>
    body {
        width: 100vw;
        overflow-x: hidden;
    }

    .container h1 {
        font-size: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .booking_now {
        border: none;
        border-radius: 10px;
        height: 35px;
        width: 150px;
    }

    .butn {
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
    }

    .butn .btn {
        color: white;
    }

    .time_pick label {
        width: 80px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 4px 4px 4px rgba(170, 170, 170, 0.2),
            -4px 4px 4px rgba(170, 170, 170, 0.2),
            0px -4px 4px rgba(170, 170, 170, 0.22);
        background-color: white;
        color: black;
        border-radius: 10px;
    }

    .time_pick input[type="radio"]:hover+label {
        background-color: #FFB5C5;
    }

    .time_pick input[type="radio"]:checked+label {
        background-color: #26577C;
        color: white;
        border: none;
        box-shadow: none;
    }

    .infor .grayed-out {
        border-radius: 10px;
        background-color: #f4f4f4;
        cursor: not-allowed;
    }

    .infor .date {
        border-radius: 10px;
        border: 2px solid #26577C;
    }

    .res_infor h4 {
        color: #26577C;
    }
    .bking_ifor{
        color: #C3AF45;
    }
    .total_bkig input{
        border: none;
        outline: none;
        font-size: 27px;
        font-weight: bold;
        margin: -20px -50px;
    }
    .table_box{
        height: 250px;
    }
    .img_bx {
        width: 250px;
        height: 100px;
    }

    .img_bx img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>