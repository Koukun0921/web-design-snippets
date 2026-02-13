<?php

/**
 * プライバシーポリシー・利用規約用の条項セクション（再利用パーツ）
 *
 * 使い方:
 *   $section = [
 *     'title'  => '第1条 (取得する個人情報)',
 *     'intro'  => '当社は、本サービスの...',
 *     'list_style' => 'numbered',  // numbered | bullet | alpha
 *     'items'  => [
 *       [
 *         'text' => '利用者から直接提供される情報',
 *         'children_style' => 'alpha',
 *         'children' => [
 *           ['text' => '氏名(個人利用の場合)'],
 *           ['text' => '法人名、担当者氏名(法人利用の場合)'],
 *         ],
 *       ],
 *       ['text' => '単独項目（子なし）'],
 *     ],
 *   ];
 *   set_query_var( 'legal_section', $section );
 *   get_template_part( 'template-parts/legal-section' );
 *
 * @package WEB DESIGN SNIPPETS
 */

$section = get_query_var('legal_section', []);
if (empty($section)) {
	return;
}

$title       = $section['title'] ?? '';
$intro       = $section['intro'] ?? '';
$list_style  = $section['list_style'] ?? 'bullet';
$items       = $section['items'] ?? [];
$outro       = $section['outro'] ?? '';

$list_tag = ('bullet' === $list_style) ? 'ul' : 'ol';
?>

<section class="p-legal-section">
	<?php if ($title) : ?>
		<h2 class="p-legal-section__title"><?php echo esc_html($title); ?></h2>
	<?php endif; ?>

	<?php if ($intro) : ?>
		<p class="p-legal-section__intro"><?php echo nl2br(esc_html($intro)); ?></p>
	<?php endif; ?>

	<?php if (! empty($items)) : ?>
		<<?php echo $list_tag; ?> class="p-legal-section__list p-legal-section__list--<?php echo esc_attr($list_style); ?>">
			<?php foreach ($items as $item) : ?>
				<?php $no_marker = ! empty($item['no_marker']); ?>
				<li class="p-legal-section__item<?php echo $no_marker ? ' p-legal-section__item--no-marker' : ''; ?>">
					<span class="p-legal-section__item-text"><?php echo esc_html($item['text'] ?? ''); ?></span>
					<?php
					$children      = $item['children'] ?? [];
					$children_style = $item['children_style'] ?? 'alpha';
					if (! empty($children)) :
						$sublist_tag = ('bullet' === $children_style) ? 'ul' : 'ol';
					?>
						<<?php echo $sublist_tag; ?> class="p-legal-section__sublist p-legal-section__sublist--<?php echo esc_attr($children_style); ?>">
							<?php foreach ($children as $child) : ?>
				<li class="p-legal-section__subitem">
					<span class="p-legal-section__subitem-text"><?php echo esc_html($child['text'] ?? ''); ?></span>
				</li>
			<?php endforeach; ?>
		</<?php echo $sublist_tag; ?>>
	<?php endif; ?>
	</li>

<?php endforeach; ?>
</<?php echo $list_tag; ?>>
<?php endif; ?>

<?php if ($outro) : ?>
	<p class="p-legal-section__outro"><?php echo nl2br(esc_html($outro)); ?></p>
<?php endif; ?>
</section>