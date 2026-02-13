<?php get_header(); ?>

<?php
// 利用規約の条項データ（legal-section コンポーネントで表示）
$terms_sections = [
    [
        'title'      => '第 1 条（サービス内容）',
        'intro'      => "本サービスは、Webデザイン制作に使用可能な UI スニペット・デザイン素材・関連資料等を、会員向けに提供するデジタルコンテンツサービスです。\n本サービスは、制作代行、業務請負、成果保証を行うものではありません。",
        'list_style' => 'bullet',
        'items'      => [],
    ],
    [
        'title'      => '第 2 条（利用資格）',
        'intro'      => "本サービスは、申込みを行った本人のみが利用できます。\n法人契約の場合、同一法人内での共有は可能としますが、第三者への提供・再配布は禁止します。",
        'list_style' => 'bullet',
        'items'      => [],
    ],
    [
        'title'      => '第 3 条（知的財産権・利用範囲）',
        'intro'      => "本サービスで提供されるすべてのコンテンツの著作権は、当社または正当な権利者に帰属します。",
        'list_style' => 'bullet',
        'items'      => [
            [
                'text'           => '利用者は、以下の範囲でのみ利用できます。',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => '自身または自社の制作業務における利用'],
                    ['text' => '商用案件への利用'],
                ],
            ],
            [
                'text'           => '以下の行為は禁止します。',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => '再配布、販売、転売'],
                    ['text' => 'クライアントワーク用素材としての再提供'],
                    ['text' => '本サービス内容をそのまま第三者に共有する行為'],
                ],
            ],
        ],
    ],
    [
        'title'      => '第 4 条（禁止事項）',
        'intro'      => '利用者は、以下の行為を行ってはなりません。',
        'list_style' => 'bullet',
        'items'      => [
            ['text' => 'なりすまし、不正利用'],
            ['text' => '再販売、転用目的での利用'],
            ['text' => '著作権、商標権等の権利侵害'],
            ['text' => '違法行為、公序良俗に反する行為'],
            ['text' => '当社または第三者に不利益を与える行為'],
        ],
    ],
    [
        'title'      => '第 5 条（利用停止・契約解除）',
        'intro'      => '',
        'list_style' => 'bullet',
        'items'      => [
            [
                'text' => '当社は、利用者が本規約に違反したと判断した場合、事前の通知なく、サービスの利用停止または契約解除を行うことができます。',
                'no_marker' => true,
            ],
            [
                'text' => '悪質な違反行為が認められた場合、返金は行いません。',
                'no_marker' => true,
            ],
        ],
    ],
    [
        'title'      => '第 6 条（支払い・未払い対応）',
        'intro'      => '',
        'list_style' => 'bullet',
        'items'      => [
            [
                'text' => '利用料金の支払いが確認できない場合、当社は当該利用者のサービス利用を停止します。',
                'no_marker' => true,
            ],
            [
                'text' => '支払期限から 7 日以内に入金が確認できない場合、当該契約は解約扱いとします。',
                'no_marker' => true,
            ],
        ],
    ],
    [
        'title'      => '第 7 条（免責事項）',
        'intro'      => '',
        'list_style' => 'bullet',
        'items'      => [
            [
                'text' => '当社は、本サービスの利用により生じた損害について、当社の故意または重過失がない限り、責任を負いません。',
                'no_marker' => true,
            ],
            [
                'text' => '通信障害、外部サービスの不具合、利用環境の差異等についても、同様とします。',
                'no_marker' => true,
            ],
        ],
    ],
    [
        'title'      => '第 8 条（損害賠償責任の上限）',
        'intro'      => '',
        'list_style' => 'bullet',
        'items'      => [
            [
                'text' => '当社が損害賠償責任を負う場合、その上限は当該利用者が直近 1 か月間に支払った利用料金の額とします。',
                'no_marker' => true,
            ],
            [
                'text' => '特別損害、逸失利益については賠償責任を負いません。',
                'no_marker' => true,
            ],
        ],
    ],
    [
        'title'      => '第 9 条（準拠法・管轄）',
        'intro'      => "本規約は日本法に準拠します。\n本サービスに関する紛争については、東京地方裁判所 を第一審の専属的合意管轄裁判所とします。",
        'list_style' => 'bullet',
        'items'      => [],
    ],
];
?>

<main>
    <div class="p-page-terms">
        <div class="p-page-terms__inner l-inner">
            <h1 class="p-page-terms__heading c-legal-heading">利用規約</h1>
            <p class="p-page-terms__intro">本利用規約（以下「本規約」）は、株式会社 APO（以下「当社」）が提供する「WEB DESIGN SNIPPETS」（以下「本サービス」）の利用条件を定めるものです。</p>
            <div class="p-page-terms__content">
                <?php foreach ($terms_sections as $section) : ?>
                    <?php
                    set_query_var('legal_section', $section);
                    get_template_part('template-parts/legal-section');
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>