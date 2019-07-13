<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
 * Portuguese translation by null2
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
		'ACP_SLIDE_WEUNI'					=> 'Slideshow for Header',
		'ACP_SLIDE_WEUNI_SETTINGS'			=> 'Configuração',
		'ACP_SLIDE_WEUNI_EXPLAIN'			=> 'Tamanho máximo sugerido das imagens: 2570px x 465px.<br>Caminho das imagens: ./ext/pikaron/slideweuni/images/ ou URL para link externo (Imagens da internet)<br>(Opcional:As imagens são mostradas aleatoriamente)<br>(Opcional: URL para links externos)',
		'ACP_SLIDE_WEUNI_VERSION'			=> 'Versão desta extensão: ',
		'ACP_SLIDE_WEUNI_IMAGES'			=> 'Dados das imagen',
		'L_SLIDE_WEUNI_ACTIVE'				=> 'Ativar SlideShow',
		'L_SLIDE_WEUNI_DELAY'				=> 'Delay na transição das imagens',
		'L_SLIDE_WEUNI_DELAY_EXPLAIN'		=> '(Mínimo: 1000 ms = 1 Segundo , Máximo: 20000 ms = 20 Segundos)',
		'L_UNI_DELAY'						=> 'Milisegundos',
		'L_SLIDE_WEUNI_INTER'				=> 'The User can interact with the transition of the images',
		'L_SLIDE_WEUNI_CONTROLS'			=> 'Mostrar Controles',
		'L_SLIDE_WEUNI_ALEATORY'			=> 'Imagens em ordem aleatória',
		'L_SLIDE_WEUNI_TITLE'				=> 'Mostrar Título e Descrição',
		'L_SLIDE_WEUNI_SEARCH'				=> 'Mostrar caixa de pesquisa no cabeçalho',
		'L_SLIDE_WEUNI_EFFECT'				=> 'Efeito',
		'L_SLIDE_WEUNI_COLOR_TIT_F'			=> 'Cor de fundo do Título e Descrição',
		'L_SLIDE_WEUNI_COLOR_TIT_F_EXPLAIN' => '(Formato: #ffffff)',
		'L_SLIDE_WEUNI_COLOR_TIT_B'			=> 'Cor da borda do Título e Descrição',
		'L_SLIDE_WEUNI_COLOR_TIT_B_EXPLAIN' => '(Formato: #000000)',
		'L_SLIDE_WEUNI_COLOR_SELECT'		=> 'Clique na caixa para selecionar uma cor',
		'L_SLIDE'							=> 'Slide',
		'L_FADE'							=> 'Blur',
		'L_SLIDE_WEUNI_CANT_IMG'			=> 'Quantidade de imagens',
		'L_SLIDE_WEUNI_CANT_IMG_EXPLAIN'	=> '(Mínimo: 2 - Máximo: 60)',
		'LOG_CONFIG_SLIDE'					=> '<strong>Editado extensão Slideshow for Header</strong>',
		'L_SLIDE_WEUNI_NO_IMG'				=> 'Não foi possível localizar a imagem com o número',
		'L_SLIDE_WEUNI_NO_IMG_URL'			=> 'A imagem externa NÃO está acessível.',
		'L_SLIDE_WEUNI_NO_IMG_RUTE'			=> ' na rota ',
		'L_SLIDE_WEUNI_IMG'					=> 'Nome ou URL da %sª imagem',
		'L_SLIDE_WEUNI_URL'					=> 'URL a ir ao clicar na %sª imagem',
));
