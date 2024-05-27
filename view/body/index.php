<style>
  /* Body樣式 */
  body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    line-height: 1.6;
    background-color: #f5f5f5;
  }



  /* 標題樣式 */
  .display-4 {
    color: #000;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
    font-size: 2.5rem;
  }

  /* 引用樣式 */
  .blockquote {
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
  }

  /* 段落樣式 */
  .blockquote p {
    margin-bottom: 20px;
    font-size: 1.2rem;
  }

  /* 響應式媒體查詢 */
  @media (max-width: 1200px) {
    .container {
      padding: 10px;
    }
  }

  @media (max-width: 768px) {
    .display-4 {
      font-size: 2rem;
    }

    .blockquote {
      padding: 20px;
    }
  }
</style>
<style>
  .slideshow-container {
    max-width: 800px;
    position: relative;
    margin: auto;
  }

  .mySlides img {
    width: 700px;
    height: 300px;
    /* 設置固定的高度 /
      object-fit: cover;
      / 保持圖片比例並填充容器 */
  }

  .mySlides {
    display: none;
  }

  .fade-in {
    opacity: 1;
    /* 將透明度設置為1，以顯示幻燈片 */
  }

  .fade-out {
    opacity: 0;
    /* 將透明度設置為0，以隱藏幻燈片 */
  }
</style>
<div class=" h-25">
  <figure class="text-center">
    <h1 class="display-4">關於我們</h1>
  </figure>
  <figure class="text-center">
    <blockquote class="blockquote">
      <p><strong>RS休閒概念館，RS電競工廠，RS科技網，網咖資歷至今有25年</strong></p>
      <p><strong>第1間網咖，創立於民國88年，1999年成立。</strong></p>
      <p><strong>當初4位人員，楊智凱、陳譽書、林根弘與李宇堂，去戰略高手玩發現這個市場。</strong></p>
      <p><strong>陳譽書、林根弘，當時在光華商場門市上班，有電腦硬體軟體組裝，以及網路架設經驗。</strong></p>
      <p><strong>李宇堂，在戰略高手為美編人員。大家就在楊智凱的小店面，組了20幾台電腦，</strong></p>
      <p><strong>架設區域網路，就這樣展開了網咖的創業歷程！</strong></p>
      <div class="slideshow-container">
        <div class="mySlides">
          <img src="photo/index1.jpg" alt="Slide 1">
        </div>
        <div class="mySlides">
          <img src="photo/index2.jpg" alt="Slide 2">
        </div>
        <div class="mySlides">
          <img src="photo/index3.jpg" alt="Slide 3">
        </div>
      </div>
      <p>&nbsp;</p>
      <p><strong>RS休閒概念館的話，1999年以RS科技網開店，2000年改成RS休閒概念館，2016年成立最新 RS電競工廠。</strong></p>
      <p><strong>是由楊智凱、陳譽書、林根弘與李孝雋，4位所合資成立，完全由自己來經營，沒有給其他人來加盟！</strong></p>
    </blockquote>
  </figure>
  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      slides[slideIndex - 1].style.display = "block";
      fadeIn(slides[slideIndex - 1]);
      setTimeout(function() {
        fadeOut(slides[slideIndex - 1]);
      }, 2500); // 延遲淡出效果，與淡入效果同步
      setTimeout(showSlides, 5000); // 圖片顯示時間為5秒
    }

    function fadeIn(element) {
      element.style.opacity = 0;
      var opacity = 0;
      var timer = setInterval(function() {
        if (opacity >= 1) {
          clearInterval(timer);
        }
        element.style.opacity = opacity;
        opacity += 0.05;
      }, 40);
    }

    function fadeOut(element) {
      var opacity = 1;
      var timer = setInterval(function() {
        if (opacity <= 0) {
          clearInterval(timer);
        }
        element.style.opacity = opacity;
        opacity -= 0.05;
      }, 40);
    }
  </script>