<style>
  ::-webkit-scrollbar {
    width: 30px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    border-radius: 10px;
    box-shadow: inset 0 0 5px grey;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: black;
    border: 1px solid black;
    border-radius: 10px;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #fff;
    cursor: pointer;
  }

  body {
    font-family: "Roboto", sans-serif;
    margin: 0;
    width: 90%;
    margin: auto;
  }

  .btn {
    background-color: #007bff;
    border-radius: 8px;
    color: #fff;
    display: inline-block;
    padding: 10px 16px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #0056b3;
  }

  .card {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
    width: 400px;
  }

  .card-content {
    padding: 20px;
  }

  .card-content h2 {
    color: #333;
    font-size: 1.4em;
    margin-bottom: 10px;
  }

  .card-content p {
    color: #666;
    font-size: 0.95em;
    margin-bottom: 15px;
  }

  .card-element-title {
    height: 100px;
    overflow-x: hidden;
    overflow-y: hidden;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card img {
    display: block;
    height: 300px;
    object-fit: cover;
    width: 100%;
  }

  .cursor_pointer {
    transition: 1s all;
  }

  .cursor_pointer:hover {
    cursor: pointer;
    transition: 1s all;
  }

  .date_originale {
    color: rgba(0, 0, 0, 0.5);
    font-size: 12px;
  }

  .direct_page {
    background-color: black;
    color: white;
    margin: 0;
    padding: 10px;
    text-align: center;
  }

  .direct_page:hover {
    cursor: pointer;
  }

  .display_flex {
    background-color: #292323;
    color: white;
    display: flex;
    justify-content: space-around;
    text-align: center;
  }

  .display_flex div {
    padding: 20px;
    text-align: center;
    width: 100%;
  }

  .display_flex div:hover {
    background-color: red;
    color: white;
    cursor: pointer;
  }

  .display_flex a {
    color: white;
    text-decoration: none;
  }

  .display_flex2 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }

  .display_flex2 div {
    margin: 50px;
  }

  .h2_1,
  .h3_1 {
    padding: 10px;
    text-align: center;
  }

  h1 {
    text-align: center;
  }

  h3 {
    text-align: center;
  }

  html {
    scroll-behavior: smooth;
  }

  .img_height {
    height: 100px;
  }

  .link1 {
    background-image: url('https://img.icons8.com/ios/40/settings--v1.png');
    height: 40px;
    width: 40px;
  }

  .link2 {
    background-image: url('https://img.icons8.com/material-outlined/40/link--v1.png');
    height: 40px;
    width: 40px;
  }

  .p_img {
    margin: auto;
    margin-bottom: 80px;
    margin-top: 80px;
    text-align: center;
    width: 100%;
  }

  .p_img img {
    border-radius: 7px;
    text-align: center;
    width: 380px;
  }

  .p_img_1 img {
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
  }

  .p_img_1 img:hover {
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 1);
  }

  .sittings_ {
    display: flex;
    justify-content: space-around;
    margin: 25px;
  }
</style>
