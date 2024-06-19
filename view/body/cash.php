<style>
  body {
    overflow-x: hidden;
    margin: 0;
    padding: 0;
  }

  .container1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    height: auto;
  }

  .images {
    justify-content: center;
    width: 100%;
  }

  .images img {
    max-width: 100%;
    height: auto;
  }

  .cash {
    width: 500px;
    height: auto;
    margin: 0 10px;
  }

  .note {
    margin-left: 5%;
    width: 600px;
    height: 500px;
    display: inline-block;
    vertical-align: top;
  }

  h1 {
    margin-bottom: 10px;
    margin-right: 680px;
  }
</style>
</head>

<body>
  <div class="container1">
    <h1>座位價目表</h1>
    <div class="images">
      <img src="photo/cash.jpg" alt="cash" class="cash">
      <img src="photo/note.jpg" alt="note" class="note">
    </div>
  </div>