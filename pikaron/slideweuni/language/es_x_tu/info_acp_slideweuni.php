<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
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
		'ACP_SLIDE_WEUNI_SETTINGS'			=> 'Configuración',
		'ACP_SLIDE_WEUNI_EXPLAIN'			=> 'Tamaño máximo aconsejado de las imagenes: 2570px x 465px.<br>Ruta de hospedaje de las imagenes: ./ext/pikaron/slideweuni/images/ o URL con enlace externo (Imagen hospedada en Internet)<br>(Opcional - Las imagenes se muestran de forma aleatoria)<br>(Opcional - Campos de URL para redireccionar a enlaces externos)',
		'ACP_SLIDE_WEUNI_VERSION'			=> 'Versión de Extensión: ',
		'ACP_SLIDE_WEUNI_IMAGES'			=> 'Datos de Imagen',
		'L_SLIDE_WEUNI_ACTIVE'				=> 'Activar SlideShow',
		'L_SLIDE_WEUNI_DELAY'				=> 'Retardo para transición entre imagenes',
		'L_SLIDE_WEUNI_DELAY_EXPLAIN'		=> '(Mínimo: 1000 ms = 1 Segundo , Máximo: 20000 ms = 20 Segundos)',
		'L_UNI_DELAY'						=> 'MiliSegundos',
		'L_SLIDE_WEUNI_INTER'				=> 'El Usuario puede interactuar con la transición de las imagenes',
		'L_SLIDE_WEUNI_CONTROLS'			=> 'Mostrar Controles',
		'L_SLIDE_WEUNI_ALEATORY'			=> 'Imagenes en orden aleatorio',
		'L_SLIDE_WEUNI_TITLE'				=> 'Mostrar Titulo y Descripción',
		'L_SLIDE_WEUNI_SEARCH'				=> 'Mostrar cuadro de Busqueda en la Cabecera',
		'L_SLIDE_WEUNI_EFFECT'				=> 'Efecto',
		'L_SLIDE_WEUNI_COLOR_TIT_F'			=> 'Color de RELLENO del Titulo y Descripción',
		'L_SLIDE_WEUNI_COLOR_TIT_F_EXPLAIN' => '(Formato: #ffffff)',
		'L_SLIDE_WEUNI_COLOR_TIT_B'			=> 'Color del BORDE del Titulo y Descripción',
		'L_SLIDE_WEUNI_COLOR_TIT_B_EXPLAIN' => '(Formato: #000000)',
		'L_SLIDE_WEUNI_COLOR_SELECT'		=> 'Haga clic en el cuadro para seleccionar un color',
		'L_SLIDE'							=> 'Deslizar',
		'L_FADE'							=> 'Difuminar',
		'L_SLIDE_WEUNI_CANT_IMG'			=> 'Cantidad de Imagenes',
		'L_SLIDE_WEUNI_CANT_IMG_EXPLAIN'	=> '(Mínimo: 2 - Máximo: 60)',
		'LOG_CONFIG_SLIDE'					=> '<strong>Editada Extensión Slideshow for Header</strong>',
		'L_SLIDE_WEUNI_NO_IMG'				=> 'No se puede localizar la Imagen numero',
		'L_SLIDE_WEUNI_NO_IMG_URL'			=> 'La imagen Externa NO es accesible.',
		'L_SLIDE_WEUNI_NO_IMG_RUTE'			=> ' en la ruta ',
		'L_SLIDE_WEUNI_IMG'					=> 'Nombre o URL completa de la %sª Imagen',
		'L_SLIDE_WEUNI_URL'					=> 'URL para redireccionar al hacer clic en la %sª Imagen',
));
