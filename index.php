<?php get_header(); ?>
<main>
  <div class="top">
    <div class="top-title3">住まいを、<br class="sp">人生を、<br class="sp">良いほうへ。</div>
    <div class="top-title1">私たちがお手伝いします。</div>

    <div class="header2">
      <ul class="header2-list">
        <li class="item2"><a href="<?php echo home_url('/ace_base/'); ?>">Ace baseについて</a></li>
        <li class="item2"><a href="/#information">お知らせ</a></li>
        <li class="item2"><a href="<?php echo home_url('/model/'); ?>">住宅モデル</a></li>
        <li class="item2"><a href="<?php echo home_url('/voice/'); ?>">お客様の声</a></li>
        <li class="item2"><a href="<?php echo home_url('/technical/'); ?>">家づくりの技術</a></li>
        <li class="item2"><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
      </ul>
    </div>
  </div>

  <section class="event">
    <div class="event-title">
      <h1>
        <p>event</p>
      </h1>
      <h2>新築一戸建ての見学会・家づくり相談会</h2>
    </div>
    <div class="event-content">
      <ul class="event-image">
        <?php
        $query_args = array(
          'post_status' => 'publish',
          'post_type' => 'post',
          'order' => 'DESC',
          'posts_per_page' => 3
        );
        // 投稿記事に関するデータが入っているインスタンス$queryを生成
        $the_query = new WP_Query($query_args);
        if ($the_query->have_posts()) :  //ひとつのセット
          //①記事が存在した場合
          while ($the_query->have_posts()) :  //ひとつのセット
            $the_query->the_post();          //ひとつのセット
            $link = get_permalink($post->ID);  //記事（固定ページ）url取得
            $title = get_the_title($post->ID);  //記事タイトル取得
            $thumbnail = (get_the_post_thumbnail_url($post->ID, 'medium')) ? get_the_post_thumbnail_url($post->ID, 'medium') : get_template_directory_uri() . $NO_IMAGE_URL;
            $data = get_the_modified_date('Y-m-d', $post->ID); //更新日を取得
            $desc = get_the_excerpt($post->ID); //抜粋を取得
            $category = get_the_category($post->ID)[0]->name;
        ?>

        <li class="event-item">
          <a href="<?php echo $link; ?>">
            <div class="ribbon17-content">
              <!-- <span class="ribbon17">NEW</span> -->
            </div>
            <img src="<?php echo $thumbnail; ?>">
            <p><time
                datetime="<?php echo $data; ?>"><?php echo $data; ?></time><br><?php echo $title; ?><br><?php echo $desc; ?>
            </p>
            <div class="event-text">
              <?php echo $category; ?>
            </div>
          </a>
        </li>

        <?php endwhile;  ?>
        <?php else :
          //②記事が存在しなかった場合
          echo '<div class="row">';
          echo '<dd><a href="/" style="pointer-events: none;">すみません。ただいま記事を準備中です。<br>少々お待ちください。</a></dd>';
          echo '</div>';
        endif;
        wp_reset_query();  //クエリをリセット   
        ?>
      </ul>
    </div>
    <div class="event-link "><a href="<?php echo home_url('/blog/'); ?>">もっと見る</a></div>
  </section>

  <section id="concept">
    <div class="concept-title">
      <h1>
        <p>concept</p>
      </h1>
      <h2>ACE の家づくり、とは。</h2>
      <h3>理想を形にした住まいは、人生をよい方向に変えていってくれる。<br>
        家にはそんな力があると私たちは信じています。<br>
        私たち、ACE のコンセプトをお伝えいたします。</h3>
    </div>

    <div class="concept-link "><a href="<?php echo home_url('/concept/'); ?>">詳しく見る</a></div>
  </section>

  <section class="information" id="information">
    <div class="information-title">
      <h1>
        <p>information</p>
      </h1>
      <h2>お知らせ一覧</h2>
    </div>
    <div class="information-content">
      <ul class="information-image">
        <li class="information-item">
          <a href="<?php echo home_url('/blog/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/image/myhome1.jpg" alt="">
            <p>2021.06.28<br>20代でマイホームを購入することについて考える。</p>
            <div class="information-text">
              イベント
            </div>
          </a>
        </li>
        <li class="information-item">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/hiraya1.jpg" alt="">
            <p>2021.05.01<br>こだわりの平屋家屋を建てる。</p>
            <div class="information-text info2">
              家づくりのこだわり
            </div>
          </a>
        </li>
        <li class="information-item">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/saiyo1.jpg" alt="">
            <p>2021.06.04<br>スタッフ募集のお知らせ</p>
            <div class="information-text info3">
              お知らせ
            </div>
          </a>
        </li>
        <li class="information-item">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/other1.jpg" alt="">
            <p>2021.04.01<br></p>
            <div class="information-text info4">
              その他
            </div>
          </a>
        </li>
      </ul>
    </div>
    <div class="info-detail">※さらに見る場合には各カテゴリーをクリック</div>
  </section>



  <section class="information2">
    <div class="information2-content">
      <ul class="information2-image">
        <li class="information2-item">
          <a href="<?php echo home_url('/voice/'); ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/image/family.jpg" alt=""></a>
          <div class="info2-text">お客様の声</div>
          <p>ACEホームを選んだきっかけ、<br>住んでからの感想を集めました。</p>
        </li>
        <li class="information2-item">
          <a href="<?php echo home_url('/model/'); ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/image/lineup2.jpg" alt="">
            <div class="info2-text">商品モデル一覧</div>
            <p>過去の実績の一覧になります。<br>各モデルの特徴や魅力をご紹介します。</p>
          </a>
        </li>
        <li class="information2-item">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/construction1.jpg" alt=""></a>
          <div class="info2-text">こだわりの家づくり</div>
          <p>ACEホームのこだわりの家づくり、<br>特色をご紹介します。</p>
        </li>
        <li class="information2-item">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/event4.jpg" alt=""></a>
          <div class="info2-text">ACE について</div>
          <p>横浜市中区に拠点を置いております。<br>気軽にお越しください。</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="shopInformation">
    <div class="u-content-wrapper">
      <h1 class="u-heading">access</h1>
      <h2 class="u-text">ACE の店舗情報をご紹介します</h2>
      <div class="shopInformation__contents">
        <div class="map"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.368978237082!2d139.64781621542812!3d35.445658650462356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ce2b1bb57b7%3A0xe3ba49f16272376c!2z5bGx5LiL5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1621247874780!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        <table class="shopInformation__table">
          <tr>
            <th class="shopInformation__table__heading">住所</th>
            <td>〒231-0023<br>神奈川県横浜市中区山下町２７９</td>
          </tr>
          <tr>
            <th class="shopInformation__table__heading">電話番号</th>
            <td class="tel"> 0121-123-456 </td>
          </tr>
          <tr>
            <th class="shopInformation__table__heading">営業時間</th>
            <td>10:00-18:00<br>（定休日：月曜日）</td>
          </tr>
          <tr>
            <th class="shopInformation__table__heading">アクセス</th>
            <td>馬車道駅 2a出口から徒歩6分<br>馬車道駅 1b出口から徒歩10分</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>