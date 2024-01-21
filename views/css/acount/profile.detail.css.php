<style>
  .image-user img {
    width: 150px;
    height: 150px;
    border-radius: 100px;
    margin-bottom: 20px;
  }

  .info {
    flex: 0 0 30%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-left: 20px;
  }

  .info-user {
    flex: 0 0 60%;
  }

  .info_box {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .name-user {
  animation: colorChange 8s infinite;
}

@keyframes colorChange {
  0% {
    color: blue;
  }
  25% {
    color: pink;
  }
  50% {
    color: green;
  }
  75% {
    color: black;
  }
  100% {
    color: blue;
  }
}

  .bg-behind {
    width: 100%;
    background-image: url('https://static.vinwonders.com/production/optimize_chup-anh-bien-2.png');
    height: 280px;
  }

  .card {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .light-gray {
    background-color: #f8f9fa;
  }

  .updateImage {
    position: relative;
  }

  .updateImage i {
    position: absolute;
    top: 40px;
    right: 380px;
    color: white;
    font-size: 25px;
  }
  .updateInfo{
    position: relative;
  }
  .updateInfo{
    position: absolute;
    left: 720px;
    font-size: 20px;
  }

</style>