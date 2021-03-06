<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans&subset=latin,cyrillic">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Кекстаграм</title>
</head>

<body>

  <form class="filters filters-inactive" action="index.html" method="get" autocomplete="off">
    <input type="radio" id="filter-recommend" class="filters-radio" name="filter" value="recommend" checked>
    <label for="filter-recommend" class="filters-item">Рекомендуемые</label>

    <input type="radio" id="filter-popular" class="filters-radio" name="filter" value="popular">
    <label for="filter-popular" class="filters-item">Популярные</label>

    <input type="radio" id="filter-discussed" class="filters-radio" name="filter" value="discussed">
    <label for="filter-discussed" class="filters-item">Обсуждаемые</label>

    <input type="radio" id="filter-random" class="filters-radio" name="filter" value="random">
    <label for="filter-random" class="filters-item">Случайные</label>
  </form>

  <form class="upload-form" id="upload-select-image" action="assets/setdata.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="upload-image">
      <input type="file" id="upload-file" class="upload-input" name="image" required>
      <label class="upload-file upload-control" for="upload-file"></label>
    </div>

    <div class="upload-overlay hidden">
      <div class="upload-effect">
        <div class="upload-effect__container">
          <fieldset class="upload-resize-controls">
            <button type="button" class="upload-resize-control upload-resize-controls-button upload-resize-controls-button-dec">–
            </button>
            <!--
          -->
            <input type="text" class="upload-resize-control upload-resize-controls-value" value="55%" step="25" min="25%" max="100%" readonly title="Image Scale"
              name="scale" />
            <!--
          -->
            <button type="button" class="upload-resize-control upload-resize-controls-button upload-resize-controls-button-inc">+
            </button>
          </fieldset>

          <div class="upload-form-preview">
            <progress class="upload__progress" value="0"></progress>
            <img src="img/upload-default-image.jpg" class="effect-image-preview" id="processed-img" width="587" height="587" data-default="img/upload-default-image.jpg">
          </div>

          <fieldset class="upload-effect-controls">
            <div class="upload-effect-level">
              <input type="number" class="upload-effect-level-value" name="effect-level" value="20">
              <div class="upload-effect-level-line">
                <div class="upload-effect-level-pin" style="left: 20%"></div>
                <div class="upload-effect-level-val"></div>
              </div>
            </div>

            <input type="radio" name="effect" id="upload-effect-none" value="none" checked>
            <label class="upload-effect-label" for="upload-effect-none">
              <div class="upload-effect-preview"></div>
              Оригинал
            </label>

            <input type="radio" name="effect" id="upload-effect-chrome" value="chrome">
            <label class="upload-effect-label upload-effect-label-chrome" for="upload-effect-chrome">
              <div class="upload-effect-preview"></div>
              Хром
            </label>

            <input type="radio" name="effect" id="upload-effect-sepia" value="sepia">
            <label class="upload-effect-label upload-effect-label-sepia" for="upload-effect-sepia">
              <div class="upload-effect-preview"></div>
              Сепия
            </label>

            <input type="radio" name="effect" id="upload-effect-marvin" value="marvin">
            <label class="upload-effect-label upload-effect-label-marvin" for="upload-effect-marvin">
              <div class="upload-effect-preview"></div>
              Марвин
            </label>

            <input type="radio" name="effect" id="upload-effect-phobos" value="phobos">
            <label class="upload-effect-label upload-effect-label-phobos" for="upload-effect-phobos">
              <div class="upload-effect-preview"></div>
              Фобос
            </label>

            <input type="radio" name="effect" id="upload-effect-heat" value="heat">
            <label class="upload-effect-label upload-effect-label-heat" for="upload-effect-heat">
              <div class="upload-effect-preview"></div>
              Зной
            </label>
          </fieldset>

          <input class="upload-form-hashtags" name="hashtags" placeholder="#хэш-тег">

          <textarea class="upload-form-description" name="description" placeholder="Ваш комментарий..." maxlength="140"></textarea>
          <input type="text" name="photo" value="" hidden>
          <button class="upload-form-cancel" type="reset" id="upload-cancel"><span class="hidden">Закрыть</span></button>
          <button class="upload-form-submit" type="submit" id="upload-submit" name="add-photo">Отправить</button>
        </div>
      </div>
    </div>

    <div class="upload-message hidden">
      <div class="upload-message-container"></div>
    </div>
  </form>

  <div class="pictures container" style="font-size: 12px;"></div>
  <div class="overlay__container"></div>

  <footer class="footer container">
    <div class="center-wrapper">
      <section class="footer-logo">
        Сделано в
        <a tabindex="1" href="http://htmlacademy.ru" class="footer-logo-link">
          <img src="img/ha-logo.png" class="footer-logo-image" width="130" alt="HTML Academy" />HTML Academy</a> &copy; 2017
      </section>

      <nav class="footer-social">
        <a href="https://twitter.com/htmlacademy_ru" alt="twitter" class="footer-social-item footer-social-item-twitter" target="_blank"
          rel="nofollow">Twitter</a>
        <a href="https://www.instagram.com/htmlacademy/" alt="instagram" class="footer-social-item footer-social-item-instagram"
          target="_blank" rel="nofollow">Instagtam</a>
        <a href="https://www.facebook.com/htmlacademy" alt="facebook" class="footer-social-item footer-social-item-facebook" target="_blank"
          rel="nofollow">Facebook</a>
        <a href="https://vk.com/htmlacademy" alt="vk" class="footer-social-item footer-social-item-vk" target="_blank" rel="nofollow">VK</a>
      </nav>
    </div>
  </footer>


  <div class="gallery-overlay hidden" data-card-id=''>
    <span class="gallery-overlay-close">&times;</span>
    <div class="gallery-overlay-preview">
      <img src="" class="gallery-overlay-image" alt="" width="587" height="587">
      <div class="gallery-overlay-controls">
        <div class="gallery-overlay-head">
          <h3 class="gallery-overlay-title">
          <span class="comments-count">125</span>
          <span class="comments-sub" data-comment-sub=''>комментариев</span>
          </h3>
          <div class="gallery-overlay-controls-like">
            <span>Нравится</span>
            <form class='like-form' action='assets/setdata.php?like' method='get' style="display: inline-block;">
              <button class="likes-button" type="submit"></button>
              <span class="likes-count">0</span>
            </form>
          </div>
        </div>
        <div class="gallery-overlay-controls-comments">
        </div>
        <form class='comment-form' action="assets/setdata.php?comment" method='post'>
          <textarea class="comment-textarea" name="comment" minlength="1" maxlength="255" required></textarea>
          <input class="photo-id" type="number" name="id" value="" hidden>
          <button class="comment-button" type="submit" name='add-comment'>Добавить комментарий</button>
        </form>
      </div>
    </div>
  </div>

  <template id="picture-template" style="display: none">
    <a href="" class="picture">
      <img src="" width="182" height="182">
      <span class="picture-stats">
        <span class="picture-stat picture-likes"></span>
      </span>
    </a>
  </template>

  <!-- <script src="js/caman.full.js"></script> -->
  <script src="js/lib.js"></script>
  <script src="js/backend.js"></script>
  <script src="js/show-photos.js"></script>
  <script src="js/data.js"></script>
  <script src="js/initialize-scale.js"></script>
  <script src="js/initialize-filters.js"></script>
  <script src="js/form.js"></script>
  <script src="js/upload.js"></script>
</body>

</html>
