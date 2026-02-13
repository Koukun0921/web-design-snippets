<?php get_header(); ?>

<?php
$privacy_sections = [
    [
        'title'       => '1. 取得する個人情報および取得方法',
        'intro'       => '当社は、以下の方法により、必要な範囲で個人情報を取得します。',
        'list_style'  => 'bullet',
        'items'       => [
            ['text' => 'お問い合わせフォームの送信'],
            ['text' => 'サービス申込みフォームの入力'],
            ['text' => '会員ページへの登録・ログイン'],
            [
                'text'           => '取得する情報には、以下が含まれます。',
                'no_marker'      => true,
                'children_style' => 'bullet',
                'children'       => [
                    ['text' => '氏名（個人の場合）'],
                    ['text' => '会社名および担当者名（法人の場合）'],
                    ['text' => 'メールアドレス'],
                    ['text' => '電話番号'],
                    ['text' => 'IP アドレス、アクセスログ等の技術情報'],
                ],
            ],
        ],
    ],
    [
        'title'      => '2. 個人情報の利用目的',
        'intro'      => '取得した個人情報は、以下の目的の範囲内で利用します。',
        'list_style' => 'bullet',
        'items'      => [
            ['text' => '本サービスの提供および運営管理'],
            ['text' => '会員認証、本人確認'],
            ['text' => 'お問い合わせ対応'],
            ['text' => 'サービス内容の改善、品質向上のための分析'],
            ['text' => '重要なお知らせやサービスに関する案内の送付'],
            [
                'text' => '※広告配信、リマーケティング目的での利用は行いません。',
                'no_marker'      => true,
            ],
        ],
    ],
    [
        'title'      => '3. 個人情報の保存期間',
        'intro'      => '当社は、個人情報を以下の期間保管します。',
        'list_style' => 'bullet',
        'items'      => [
            ['text' => 'お問い合わせ情報：取得から 1 年間'],
            ['text' => '会員情報：解約後 6 か月間'],
            ['text' => '利用履歴・アクセスログ：取得から 1 年間'],
            ['text' => 'バックアップデータ：1 か月間'],
            [
                'text' => '保存期間経過後は、適切な方法により削除または匿名化します。',
                'no_marker'      => true,
            ],
        ],
    ],
    [
        'title'      => '4. 個人情報の削除について',
        'intro'      => "法令に基づく保存義務がある場合を除き、当社所定の期間経過後に削除を行います。\n※現時点では、利用者個別の削除依頼には対応しておりません。",
        'list_style' => 'bullet',
        'items'      => [],
    ],
    [
        'title'      => '5. 第三者提供および共同利用',
        'intro'      => "当社は、取得した個人情報を第三者に提供しません。\nただし、以下の場合を除きます。",
        'list_style' => 'bullet',
        'items'      => [
            ['text' => '法令に基づく場合'],
            ['text' => '同一法人内の従業員または業務委託先が、業務遂行上必要な範囲で利用する場合'],
        ],
    ],
    [
        'title'      => '6. 安全管理措置',
        'intro'      => '当社は、個人情報への不正アクセス、漏えい、改ざん等を防止するため、アクセス制限、管理体制の整備等、合理的な安全管理措置を講じます。',
        'list_style' => 'bullet',
        'items'      => [],
    ],
    [
        'title'      => '7. プライバシーポリシーの変更',
        'intro'      => "本ポリシーは、必要に応じて改定することがあります。\n変更後の内容は、本サイトに掲載した時点で効力を生じます。",
        'list_style' => 'bullet',
        'items'      => [],
    ],
];
?>

<main>
    <div class="p-page-privacy">
        <div class="p-page-privacy__inner l-inner">
            <h1 class="p-page-privacy__heading c-legal-heading">プライバシーポリシー</h1>
            <p class="p-page-privacy__intro">株式会社 APO（以下「当社」）は、本サービスの提供にあたり取得する個人情報について、以下の方針に基づき適切に取り扱います</p>
            <div class="p-page-privacy__content">
                <?php foreach ($privacy_sections as $section) : ?>
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