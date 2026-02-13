<?php get_header(); ?>

<?php
$law_plans = [
    [
        'name'     => 'Starter プラン',
        'price'    => '月額 1,980 円（税抜）／2,178 円（税込）',
        'features' => [],
    ],
    [
        'name'     => 'Standard プラン',
        'price'    => '月額 4,980 円（税抜）／5,478 円（税込）',
        'features' => [],
    ],
    [
        'name'     => 'Pro プラン',
        'price'    => '月額 9,800 円（税抜）／10,780 円（税込）',
        'features' => [],
    ],
];

$law_sections = [
    [
        'title'      => '■ 販売するサービス内容',
        'intro'      => "本サービス「WEB DESIGN SNIPPETS」は、Webデザイン制作に必要な UI スニペット素材・デザイン素材・関連ガイドを、会員ページを通じて毎月提供するデジタルコンテンツ型サブスクリプションサービスです。\n提供されるコンテンツは、Webデザイナー・制作会社・個人事業主等が 実案件において即利用できることを前提に制作されたデザイン素材 であり、制作代行・業務請負・成果保証を行うものではありません。",
        'list_style' => 'bullet',
        'items'      => [],
    ],
    [
        'title'      => '■ 販売価格',
        'intro'      => '各プランの価格は、サービスページまたは申込み画面に表示される金額（税込）とします。',
        'list_style' => 'bullet',
        'items'      => [],
    ],
    [
        'title'      => '■ 商品代金以外の必要料金',
        'intro'      => '',
        'list_style' => 'bullet',
        'items'      => [
            ['text' => '消費税'],
            ['text' => 'インターネット接続に必要な通信費、通信機器等の費用（利用者負担）'],
        ],
    ],
    [
        'title'      => '■ 支払い方法および支払い時期',
        'intro'      => '',
        'list_style' => 'bullet',
        'items'      => [
            [
                'text'           => '支払い方法',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => 'クレジットカード決済のみ'],
                ],
            ],
            [
                'text'           => '支払い時期',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => "初回申込み時に決済が行われます。"],
                    ['text' => "以降は、初回決済日を基準として、毎月自動的に継続課金されます。"],
                ],
            ],
        ],
    ],
    [
        'title'      => '■ サービス提供時期・提供方法',
        'intro'      => '',
        'list_style' => 'bullet',
        'items'      => [
            [
                'text'           => '提供開始時期',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => '決済完了後、速やかに利用可能となります。',],
                ],
            ],
            [
                'text'           => '提供方法',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => "会員ページにログインのうえ、デジタルコンテンツのダウンロード、閲覧、チャット機能等を通じて提供されます。"],
                ],
            ],
        ],
    ],
    [
        'title'      => '■ 返金・キャンセルについて',
        'intro'      => "本サービスはデジタルコンテンツという性質上、利用者都合による返品・返金には原則として応じておりません。",
        'list_style' => 'bullet',
        'items'      => [
            [
                'text'           => 'ただし、当社の責に帰すべき事由により',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => "サービスが提供されなかった場合"],
                    ['text' => "提供内容が明らかに申込み内容と大きく乖離している場合"],
                ],
            ],
            [
                'text'           => 'に限り、個別に協議のうえ返金または代替対応を行うことがあります。',
                'no_marker'      => true,
            ],
        ],
    ],
    [
        'title'      => '■ 解約について',
        'intro'      => "解約は、次回決済日の 7 日前まで に、会員ページ上の解約手続きより行うものとします。\n解約手続き完了後は、次回決済日以降の課金は行われません。\n日割り計算による返金は行いません。",
        'list_style' => 'bullet',
        'items'      => [],
    ],
];
?>

<main>
    <section class="p-page-law">
        <div class="p-page-law__inner l-inner">
            <h1 class="p-page-law__heading c-legal-heading">特定商取引法に基づく表記</h1>
            <ul class="p-page-law__list">
                <li class="p-page-law__item">
                    <span class="p-page-law__item-title">事業者名</span>
                    <p class="p-page-law__item-description">株式会社 APO</p>
                </li>
                <li class="p-page-law__item">
                    <span class="p-page-law__item-title">代表者名</span>
                    <p class="p-page-law__item-description">代表取締役　飛田 正枝</p>
                </li>
                <li class="p-page-law__item">
                    <span class="p-page-law__item-title">運営責任者</span>
                    <p class="p-page-law__item-description">代表取締役　飛田 正枝</p>
                </li>
                <li class="p-page-law__item">
                    <span class="p-page-law__item-title">所在地</span>
                    <p class="p-page-law__item-description">〒107-0061<br>東京都港区北青山 1-3-3<br>三橋ビル 3 階</p>
                </li>
                <li class="p-page-law__item">
                    <span class="p-page-law__item-title">電話番号</span>
                    <p class="p-page-law__item-description">050-1808-4217<br>※電話によるサポート対応は行っておりません。<br>※お問い合わせは原則としてメールにて承っております。</p>
                </li>
                <li class="p-page-law__item">
                    <span class="p-page-law__item-title">対応時間帯</span>
                    <p class="p-page-law__item-description">平日 10:00〜20:00（土日祝休み）</p>
                </li>
                <li class="p-page-law__item">
                    <span class="p-page-law__item-title">メールアドレス</span>
                    <a href="mailto:info@apo-soft.net">info@apo-soft.net</a>
                </li>
            </ul>
            <div class="p-page-law__content">
                <?php foreach ($law_sections as $index => $section) : ?>
                    <?php
                    set_query_var('legal_section', $section);
                    get_template_part('template-parts/legal-section');
                    ?>
                    <?php if (1 === $index) : ?>
                        <div class="p-page-law__plans">
                            <?php foreach ($law_plans as $plan) : ?>
                                <div class="p-page-law__plan">
                                    <h3 class="p-page-law__plan-name"><?php echo esc_html($plan['name']); ?></h3>
                                    <p class="p-page-law__plan-price"><?php echo esc_html($plan['price']); ?></p>
                                    <ul class="p-page-law__plan-features p-legal-section__list p-legal-section__list--bullet">
                                        <?php foreach ($plan['features'] as $feature) : ?>
                                            <li class="p-legal-section__item">
                                                <span class="p-legal-section__item-text"><?php echo esc_html($feature); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                            <p class="p-page-law__plans-note">※プランごとの提供内容・利用可能範囲は、申込み画面および利用規約に記載の内容に従います。</p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>