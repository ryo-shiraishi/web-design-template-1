<?php
/**
 * フロントページテンプレート（スタティックトップページ）
 * WordPress管理画面 > 設定 > 表示設定 で「固定ページ」を選択し、
 * このテンプレートを適用したページをフロントページに設定してください。
 */

// お問い合わせ送信結果メッセージ
$contact_status = isset( $_GET['contact'] ) ? sanitize_key( $_GET['contact'] ) : '';

get_header();
?>

<main>

  <!-- ===================================================
       HERO SECTION
       =================================================== -->
  <section class="relative w-full min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-brand-bg via-brand-bg to-brand-surface">

    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=2800&q=80')] bg-cover bg-center opacity-20 mix-blend-luminosity"></div>

    <!-- Radial gradient overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(201,169,110,0.03)_0%,transparent_70%)] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full flex flex-col items-start pt-20">

      <div class="fade-in delay-1">
        <p class="font-serif-en text-brand-primary tracking-[0.2em] text-sm md:text-base uppercase mb-6">
          Your Trusted Partner in Business
        </p>
      </div>

      <div class="fade-in delay-2">
        <h1 class="font-serif-jp text-4xl md:text-6xl lg:text-7xl leading-[1.4] md:leading-[1.4] font-medium text-brand-text mb-10">
          あなたのビジネスに、<br>
          誠実な伴走者を。
        </h1>
      </div>

      <div class="fade-in delay-3">
        <p class="text-brand-muted text-sm md:text-base leading-relaxed tracking-widest max-w-xl mb-12">
          私たちは、企業と個人の課題に正面から向き合い、<br class="hidden md:block">
          最善の解決策をともに考え続けます。
        </p>
      </div>

      <div class="fade-in delay-4">
        <a
          href="#contact"
          class="inline-flex items-center justify-center px-10 py-4 border border-brand-primary text-brand-primary font-serif-jp tracking-widest text-sm hover:bg-brand-primary hover:text-brand-bg transition-colors duration-300"
        >
          お問い合わせはこちら
        </a>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 fade-in delay-4">
      <span class="font-serif-en text-xs tracking-[0.3em] text-brand-muted [writing-mode:vertical-rl] rotate-180 mb-2">
        SCROLL DOWN
      </span>
      <div class="w-[1px] h-16 bg-brand-primary/30 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1/2 bg-brand-primary scroll-line-inner"></div>
      </div>
    </div>
  </section>


  <!-- ===================================================
       ABOUT SECTION / 事業概要
       =================================================== -->
  <section id="about" class="py-32 px-6 bg-brand-bg border-t border-brand-primary/20">
    <div class="max-w-7xl mx-auto">

      <!-- Introduction -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 mb-20">

        <div class="fade-in">
          <div class="flex flex-col h-full justify-center">
            <h2 class="flex flex-col gap-2 mb-10">
              <span class="font-serif-en text-brand-primary text-sm tracking-[0.2em] uppercase">About</span>
              <span class="font-serif-jp text-brand-text text-3xl font-medium tracking-widest">事業概要</span>
            </h2>

            <h3 class="font-serif-jp text-2xl md:text-3xl leading-relaxed text-brand-text mb-8">
              「お客様の課題を、自分ごととして考える」<br>
              それが私たちの仕事の原点です。
            </h3>

            <div class="text-brand-muted text-sm md:text-base leading-[2] tracking-wider space-y-6">
              <p>私たちは、2015年の創業以来、中小企業・スタートアップ・個人事業主を中心に、経営戦略・組織設計・業務改善など幅広いコンサルティングサービスを提供してきました。</p>
              <p>規模や業種を問わず、クライアントが直面する課題は千差万別です。私たちは、画一的な手法に頼ることなく、クライアントの実情に寄り添い、現場目線で実行可能な解決策を提案・実行支援します。</p>
              <p>創業から約10年。スタッフ総勢20名のチームで、「信頼される伴走者」として、今日もクライアントとともに歩んでいます。</p>
            </div>
          </div>
        </div>

        <div class="fade-in delay-1 relative aspect-square lg:aspect-auto lg:h-full">
          <img
            src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1500&q=80"
            alt="コンサルティングチームの様子"
            class="w-full h-full object-cover filter grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-700"
          >
        </div>
      </div>

      <!-- Service Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="fade-in">
          <div class="h-full bg-brand-surface p-8 border-l border-brand-primary hover:-translate-y-2 transition-transform duration-500">
            <h4 class="font-serif-jp text-lg text-brand-text mb-6 pb-4 border-b border-brand-border">
              経営戦略コンサルティング
            </h4>
            <p class="text-brand-muted text-sm leading-relaxed tracking-wider">
              事業計画の策定から競合分析、組織体制の見直しまで、<br>
              経営課題を多角的に整理し、実行力ある戦略を設計します。
            </p>
          </div>
        </div>

        <div class="fade-in delay-1">
          <div class="h-full bg-brand-surface p-8 border-l border-brand-primary hover:-translate-y-2 transition-transform duration-500">
            <h4 class="font-serif-jp text-lg text-brand-text mb-6 pb-4 border-b border-brand-border">
              業務改善・DX推進
            </h4>
            <p class="text-brand-muted text-sm leading-relaxed tracking-wider">
              業務フローの可視化と改善提案、ITツールの導入支援を通じて、<br>
              生産性向上と持続的成長を実現します。
            </p>
          </div>
        </div>

        <div class="fade-in delay-2">
          <div class="h-full bg-brand-surface p-8 border-l border-brand-primary hover:-translate-y-2 transition-transform duration-500">
            <h4 class="font-serif-jp text-lg text-brand-text mb-6 pb-4 border-b border-brand-border">
              人材・組織開発
            </h4>
            <p class="text-brand-muted text-sm leading-relaxed tracking-wider">
              採用計画の設計、人事評価制度の構築、社員研修の企画・実施まで、<br>
              強い組織づくりをトータルでサポートします。
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ===================================================
       COMPANY SECTION / 会社概要
       =================================================== -->
  <section id="company" class="py-32 px-6 bg-brand-bg border-t border-brand-primary/20">
    <div class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">

        <!-- Image -->
        <div class="fade-in order-2 lg:order-1 relative aspect-[4/3] lg:aspect-auto lg:h-full">
          <img
            src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1500&q=80"
            alt="オフィスの様子"
            class="w-full h-full object-cover filter grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-700"
          >
        </div>

        <!-- Info Table -->
        <div class="order-1 lg:order-2">
          <div class="fade-in mb-16">
            <h2 class="flex flex-col gap-2 mb-6">
              <span class="font-serif-en text-brand-primary text-sm tracking-[0.2em] uppercase">Company</span>
              <span class="font-serif-jp text-brand-text text-3xl font-medium tracking-widest">会社概要</span>
            </h2>
            <p class="font-serif-en text-brand-muted tracking-[0.3em] uppercase text-xs">Company Profile</p>
          </div>

          <div class="fade-in delay-1">
            <dl class="border-t border-brand-border">
              <?php
              $company_info = [
                  [ 'label' => '会社名',     'value' => '株式会社サンプルパートナーズ' ],
                  [ 'label' => '英語表記',   'value' => 'Sample Partners Co., Ltd.' ],
                  [ 'label' => '設立',       'value' => '2015年4月1日' ],
                  [ 'label' => '代表取締役', 'value' => '山田 太郎' ],
                  [ 'label' => '資本金',     'value' => '1,000万円' ],
                  [ 'label' => '従業員数',   'value' => '20名（2025年4月現在）' ],
                  [ 'label' => '所在地',     'value' => '〒100-0001 東京都千代田区千代田1-1-1 サンプルビル8階' ],
                  [ 'label' => '電話番号',   'value' => '03-XXXX-XXXX' ],
                  [ 'label' => 'FAX',        'value' => '03-XXXX-XXXX' ],
                  [ 'label' => '事業内容',   'value' => '経営コンサルティング、業務改善支援、人材・組織開発' ],
              ];
              foreach ( $company_info as $info ) :
              ?>
              <div class="flex flex-col sm:flex-row py-6 sm:py-8 border-b border-brand-border">
                <dt class="w-full sm:w-48 font-serif-jp text-brand-text text-sm tracking-wider mb-2 sm:mb-0 shrink-0">
                  <?php echo esc_html( $info['label'] ); ?>
                </dt>
                <dd class="w-full text-brand-muted text-sm tracking-wider leading-relaxed">
                  <?php echo esc_html( $info['value'] ); ?>
                </dd>
              </div>
              <?php endforeach; ?>
            </dl>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ===================================================
       ACCESS SECTION / アクセス
       =================================================== -->
  <section id="access" class="py-32 px-6 bg-brand-surface border-t border-brand-primary/20">
    <div class="max-w-7xl mx-auto">

      <div class="fade-in mb-16">
        <h2 class="flex flex-col gap-2 mb-6">
          <span class="font-serif-en text-brand-primary text-sm tracking-[0.2em] uppercase">Access</span>
          <span class="font-serif-jp text-brand-text text-3xl font-medium tracking-widest">アクセス</span>
        </h2>
        <p class="font-serif-en text-brand-muted tracking-[0.3em] uppercase text-xs">Office Access</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">

        <!-- Access Info -->
        <div class="fade-in delay-1 order-2 lg:order-1">
          <div class="space-y-12">
            <div>
              <h3 class="font-serif-jp text-brand-primary text-sm tracking-widest mb-4">ADDRESS</h3>
              <p class="text-brand-text text-sm leading-relaxed tracking-wider">
                〒100-0001<br>
                東京都千代田区千代田1-1-1<br>
                サンプルビル 8階
              </p>
            </div>

            <div>
              <h3 class="font-serif-jp text-brand-primary text-sm tracking-widest mb-4">ACCESS</h3>
              <ul class="text-brand-text text-sm leading-relaxed tracking-wider space-y-2">
                <li>・東京メトロ 千代田線「XXX駅」徒歩3分</li>
                <li>・JR 中央線「XXX駅」徒歩7分</li>
                <li>・駐車場：近隣コインパーキングをご利用ください</li>
              </ul>
            </div>

            <div>
              <h3 class="font-serif-jp text-brand-primary text-sm tracking-widest mb-4">HOURS</h3>
              <p class="text-brand-text text-sm leading-relaxed tracking-wider">
                平日 9:00〜18:00（土日祝休）
              </p>
            </div>
          </div>
        </div>

        <!-- Google Maps -->
        <div class="fade-in delay-2 order-1 lg:order-2">
          <div class="aspect-square md:aspect-[4/3] lg:aspect-square w-full filter grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8280303808788!2d139.7645498767746!3d35.68123617258713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2sTokyo%20Station!5e0!3m2!1sen!2sjp!4v1700000000000!5m2!1sen!2sjp"
              width="100%"
              height="100%"
              style="border:0;"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Google Maps Location"
            ></iframe>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ===================================================
       CONTACT SECTION / お問い合わせ
       =================================================== -->
  <section id="contact" class="py-32 px-6 bg-brand-bg border-t border-brand-primary/20">
    <div class="max-w-3xl mx-auto">

      <div class="fade-in mb-16 text-center">
        <h2 class="flex flex-col gap-2 mb-6 items-center">
          <span class="font-serif-en text-brand-primary text-sm tracking-[0.2em] uppercase">Contact</span>
          <span class="font-serif-jp text-brand-text text-3xl font-medium tracking-widest">お問い合わせ</span>
        </h2>
        <p class="font-serif-en text-brand-muted tracking-[0.3em] uppercase text-xs mb-8">Get In Touch</p>
        <p class="text-brand-muted text-sm leading-relaxed tracking-wider">
          ご相談・ご質問など、お気軽にお問い合わせください。<br class="hidden sm:block">
          担当者より2営業日以内にご連絡いたします。
        </p>
      </div>

      <?php if ( $contact_status === 'success' ) : ?>
      <div class="mb-8 p-6 border border-brand-primary/50 bg-brand-primary/10 text-center">
        <p class="font-serif-jp text-brand-primary tracking-wider text-sm">
          お問い合わせを受け付けました。担当者よりご連絡いたします。
        </p>
      </div>
      <?php elseif ( $contact_status === 'error' ) : ?>
      <div class="mb-8 p-6 border border-red-500/50 bg-red-500/10 text-center">
        <p class="font-serif-jp text-red-400 tracking-wider text-sm">
          送信に失敗しました。お手数ですが、再度お試しください。
        </p>
      </div>
      <?php endif; ?>

      <div class="fade-in delay-1">
        <form
          method="post"
          action="<?php echo esc_url( home_url( '/' ) ); ?>"
          class="space-y-8"
        >
          <?php wp_nonce_field( 'sample_partners_contact', 'sample_partners_contact_nonce' ); ?>

          <!-- お名前 -->
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
            <div class="w-full sm:w-1/3 flex items-center">
              <label for="contact_name" class="text-sm font-serif-jp tracking-wider text-brand-text">
                お名前 <span class="text-brand-primary ml-2 text-xs">必須</span>
              </label>
            </div>
            <div class="w-full sm:w-2/3">
              <input
                type="text"
                id="contact_name"
                name="contact_name"
                required
                class="w-full bg-brand-surface border border-brand-border px-4 py-3 text-brand-text text-sm focus:outline-none focus:border-brand-primary transition-colors"
                placeholder="山田 太郎"
              >
            </div>
          </div>

          <!-- 会社名 -->
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
            <div class="w-full sm:w-1/3 flex items-center">
              <label for="contact_company" class="text-sm font-serif-jp tracking-wider text-brand-text">
                会社名
              </label>
            </div>
            <div class="w-full sm:w-2/3">
              <input
                type="text"
                id="contact_company"
                name="contact_company"
                class="w-full bg-brand-surface border border-brand-border px-4 py-3 text-brand-text text-sm focus:outline-none focus:border-brand-primary transition-colors"
                placeholder="株式会社サンプル"
              >
            </div>
          </div>

          <!-- メールアドレス -->
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
            <div class="w-full sm:w-1/3 flex items-center">
              <label for="contact_email" class="text-sm font-serif-jp tracking-wider text-brand-text">
                メールアドレス <span class="text-brand-primary ml-2 text-xs">必須</span>
              </label>
            </div>
            <div class="w-full sm:w-2/3">
              <input
                type="email"
                id="contact_email"
                name="contact_email"
                required
                class="w-full bg-brand-surface border border-brand-border px-4 py-3 text-brand-text text-sm focus:outline-none focus:border-brand-primary transition-colors"
                placeholder="info@example.com"
              >
            </div>
          </div>

          <!-- 電話番号 -->
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
            <div class="w-full sm:w-1/3 flex items-center">
              <label for="contact_phone" class="text-sm font-serif-jp tracking-wider text-brand-text">
                電話番号
              </label>
            </div>
            <div class="w-full sm:w-2/3">
              <input
                type="tel"
                id="contact_phone"
                name="contact_phone"
                class="w-full bg-brand-surface border border-brand-border px-4 py-3 text-brand-text text-sm focus:outline-none focus:border-brand-primary transition-colors"
                placeholder="03-0000-0000"
              >
            </div>
          </div>

          <!-- お問い合わせ種別 -->
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
            <div class="w-full sm:w-1/3 flex mt-3">
              <label for="contact_category" class="text-sm font-serif-jp tracking-wider text-brand-text">
                お問い合わせ種別 <span class="text-brand-primary ml-2 text-xs">必須</span>
              </label>
            </div>
            <div class="w-full sm:w-2/3 relative">
              <select
                id="contact_category"
                name="contact_category"
                required
                class="w-full bg-brand-surface border border-brand-border px-4 py-3 text-brand-text text-sm focus:outline-none focus:border-brand-primary appearance-none transition-colors cursor-pointer"
              >
                <option value="" disabled selected>選択してください</option>
                <option value="経営戦略">経営戦略コンサルティングについて</option>
                <option value="業務改善">業務改善・DX推進について</option>
                <option value="人材開発">人材・組織開発について</option>
                <option value="その他">その他</option>
              </select>
              <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-brand-primary">▼</div>
            </div>
          </div>

          <!-- お問い合わせ内容 -->
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
            <div class="w-full sm:w-1/3 flex mt-3">
              <label for="contact_message" class="text-sm font-serif-jp tracking-wider text-brand-text">
                お問い合わせ内容 <span class="text-brand-primary ml-2 text-xs">必須</span>
              </label>
            </div>
            <div class="w-full sm:w-2/3">
              <textarea
                id="contact_message"
                name="contact_message"
                required
                rows="5"
                class="w-full bg-brand-surface border border-brand-border px-4 py-3 text-brand-text text-sm focus:outline-none focus:border-brand-primary transition-colors resize-y"
                placeholder="具体的なご相談内容をご記入ください。"
              ></textarea>
            </div>
          </div>

          <!-- 個人情報同意 -->
          <div class="pt-6 border-t border-brand-border flex items-center justify-center">
            <label class="flex items-center gap-3 cursor-pointer group">
              <div class="relative flex items-center justify-center">
                <input
                  type="checkbox"
                  name="contact_agree"
                  required
                  class="peer appearance-none w-5 h-5 border border-brand-border bg-brand-surface checked:bg-brand-primary checked:border-brand-primary transition-colors focus:outline-none cursor-pointer"
                >
                <svg
                  class="absolute w-3 h-3 text-brand-bg opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"
                  viewBox="0 0 14 10" fill="none"
                >
                  <path d="M1 5L4.5 8.5L13 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <span class="text-sm text-brand-muted group-hover:text-brand-text transition-colors tracking-wider">
                個人情報取扱いへの同意（必須）
              </span>
            </label>
          </div>

          <!-- Submit -->
          <div class="pt-8 flex justify-center">
            <button
              type="submit"
              class="inline-flex items-center justify-center gap-4 px-16 py-4 border border-brand-primary text-brand-primary font-serif-jp tracking-widest text-sm hover:bg-brand-primary hover:text-brand-bg transition-colors duration-300 w-full sm:w-auto"
            >
              <span>送 信</span>
              <span class="font-serif-en">→</span>
            </button>
          </div>

        </form>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
