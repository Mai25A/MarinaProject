<style>
    .container-fluid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 50px;
        margin-top: 10px;
        padding: 10px; 
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 400px;
        height: 400px;
        text-align: center;
        font-family: arial;
        border-radius: 10px;
        overflow: hidden;
        margin-right: 10px;
    }

    .card:last-child {
        margin-right: 0;
    }
    
    .card-image img {
        width: 400px;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
    }

    .card-body {
        padding: 10px;
    }

    .title {
        display: flex;
        gap: 30px;
        justify-content: center;
        font-size: 30px;
        padding: 30px;
    }

    .underline {
        text-decoration: none;
        color: black;
    }

    .underline:hover {
        color: red;
    }
    .button {
        border: none;
        padding: 10px 20px;
        color: black;
        font-size: 24px;
        background-color: white;
    }
</style>