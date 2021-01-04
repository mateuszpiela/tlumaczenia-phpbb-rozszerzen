<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_FLAIR_TITLE'	=> 'Osiągnięcia',

	'ACP_FLAIR_SETTINGS'					=> 'Ustawienia',
	'ACP_FLAIR_SETTINGS_TITLE'				=> 'Ustawienia osiągnięć',
	'ACP_FLAIR_OPTIONS'						=> 'Ogólne ustawienia',
	'ACP_FLAIR_NOTIFY_USERS'				=> 'Włącz powiadomienia',
	'ACP_FLAIR_NOTIFY_USERS_EXPLAIN'		=> 'Włącz aby pozwolić użytkownikom otrzymywać powiadomienia kiedy otrzymają nowę osiągnięcie do odnich profilu.',
	'ACP_FLAIR_DISPLAY_OPTIONS'				=> 'Opcje wyświetlania',
	'ACP_FLAIR_DISPLAY_OPTIONS_EXPLAIN'		=> 'Te opcje wyświetlenia stosuje się do osiągnięć <strong>Bez kategorii</strong>.',
	'ACP_FLAIR_SHOW_ON_PROFILE'				=> 'Wyświetl na profilu',
	'ACP_FLAIR_SHOW_ON_PROFILE_EXPLAIN'		=> 'Włącz aby osiągnięcia były widoczne na profilu użytkownika.',
	'ACP_FLAIR_SHOW_ON_POSTS'				=> 'Wyświetl na postach',
	'ACP_FLAIR_SHOW_ON_POSTS_EXPLAIN'		=> 'Włącz aby osiągnięcia były widoczne w sekcji informacji użytkownika na każdym poście.',
	'ACP_FLAIR_DISPLAY_LIMIT'				=> 'Limit wyświetlania',
	'ACP_FLAIR_DISPLAY_LIMIT_EXPLAIN'		=> 'Ogranicz ilość widocznych osiągnięć na posta. Wpisz 0 aby bez ograniczeń',
	'ACP_FLAIR_SETTINGS_SAVED'				=> 'Ustawienia osiągnięć zostały zapisane',

	'ACP_FLAIR_MANAGE_CATS'				=> 'Zarządzaj kategoriami',
	'ACP_FLAIR_MANAGE_CATS_EXPLAIN'		=> 'Osiągnięcia można pogrupować w kategorie, które można zarządzać tutaj.',
	'ACP_FLAIR_CATS_EMPTY'				=> 'Nie ma kategorii',
	'ACP_FLAIR_ADD_CAT'					=> 'Dodaj kategorię osiągnięć',
	'ACP_FLAIR_CATS_ADD_SUCCESS'		=> 'Kategoria osiągnięć została dodana',
	'ACP_FLAIR_EDIT_CAT'				=> 'Edytuj kategorię osiągnięć',
	'ACP_FLAIR_CATS_EDIT_SUCCESS'		=> 'Szczegóły kategorii osiągnięć zostały zapisane',
	'ACP_FLAIR_CAT_DETAILS'				=> 'Szczegóły kategorii',
	'ACP_FLAIR_DELETE_CAT'				=> 'Usuń kategorię',
	'ACP_FLAIR_CATS_DELETE_SUCCESS'		=> 'Kategoria osiągnięć została usunięta',
	'ACP_FLAIR_CATS_DELETE_ERRORED'		=> 'Powstał błąd w trakcie próby usunięcia kategorii',
	'ACP_FLAIR_DELETE_FLAIR_CONFIRM'	=> 'Czy na pewno chcesz usunąć tą rzecz?',
	'ACP_FLAIR_FORM_CAT_NAME'			=> 'Nazwa kategorii',
	'ACP_FLAIR_FORM_DELETE_ALL_FLAIR'	=> 'Usuń wszystkie osiągnięcia',
	'ACP_FLAIR_FORM_MOVE_FLAIR_TO'		=> 'Przenieś osiągnięcia do',

	'ACP_FLAIR_MANAGE'				=> 'Zarządzaj osiągnięcia',
	'ACP_FLAIR_MANAGE_EXPLAIN'		=> 'Tutaj może zarządzać swoimi osiągnięciami',
	'ACP_FLAIR_EMPTY'				=> 'Nie masz żadnych osiągnięć',
	'ACP_FLAIR_ADD'					=> 'Dodaj osiągnięcie',
	'ACP_FLAIR_ADD_SUCCESS'			=> 'Osiągnięcie zostało dodane',
	'ACP_FLAIR_EDIT'				=> 'Edytuj osiągnięcie',
	'ACP_FLAIR_EDIT_SUCCESS'		=> 'Szczegóły osiągnięcia zostały zapisane',
	'ACP_FLAIR_DETAILS'				=> 'Szczegóły osiągnięcia',
	'ACP_FLAIR_APPEARANCE'			=> 'Wygląd osiągnięcia',
	'ACP_FLAIR_AUTO_ASSIGN'			=> 'Automatycznie przydziel osiągnięcie',
	'ACP_FLAIR_AUTO_ASSIGN_EXPLAIN'	=> 'Ustaw opcję poniżęj aby automatycznie przyznawać użytkownikom osiągnięcia. Osiągnięcia które zostały dodane zostaną tam dopóki nie zostaną usunięte przez moderatora.<br><strong>Ilość postów</strong> oraz <strong>dni zarejestrowanych</strong> są niezależnymi od pozostałych oraz będą wyzwolone kiedy każde wymaganie będzie osiągnięte.',
	'ACP_FLAIR_DELETE_SUCCESS'		=> 'Osiągnięcie zostało usunięte',
	'ACP_FLAIR_DELETE_ERRORED'		=> 'Nie można usunąć osiągnięcia z powodu błędu',
	'ACP_FLAIR_TYPE'				=> 'Typ osiągnięcia',
	'ACP_FLAIR_FORM_CAT'			=> 'Kategoria osiągnięcia',
	'ACP_FLAIR_FORM_NAME'			=> 'Nazwa osiągnięcia',
	'ACP_FLAIR_FORM_DESC'			=> 'Opis osiągnięcia',
	'ACP_FLAIR_FORM_PREVIEW'		=> 'Podgląd osiągnięcia',
	'ACP_FLAIR_FORM_COLOR'			=> 'Kolor osiągnięcia',
	'ACP_FLAIR_FORM_ICON'			=> 'Ikona osiągnięcia',
	'ACP_FLAIR_FORM_ICON_COLOR'		=> 'Kolor ikony osiągnięcia',
	'ACP_FLAIR_FORM_IMG'			=> 'Ikonka osiągnięcia',
	'ACP_FLAIR_NO_IMGS'				=> 'Nie znaleziono zestawów ikonek w <b>images/flair</b>.',
	'ACP_FLAIR_FORM_FONT_COLOR'		=> 'Kolor czcionki osiągnięcia',
	'ACP_FLAIR_FORM_GROUPS'			=> 'Przyznaj grupom',
	'ACP_FLAIR_FORM_GROUPS_AUTO'	=> 'Automatycznie przyznaj grupom',

	'ACP_FLAIR_DESC_EXPLAIN'		=> 'Krótki opcjonalny opis który będzie pojawiał się w legendzie osiągnięcia.',
	'ACP_FLAIR_COLOR_EXPLAIN'		=> 'Tło osiągnięcia. Zostaw puste aby wyłączyć tło.',
	'ACP_FLAIR_ICON_EXPLAIN'		=> 'Wpisz opcjonalnie identyfikator ikony Font Awesome. [&nbsp;<a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome lista ikon</a>&nbsp;]',
	'ACP_FLAIR_ICON_COLOR_EXPLAIN'	=> 'Kolor ikony, jeśli dostępny.',
	'ACP_FLAIR_IMG_EXPLAIN'			=> 'Niestandardowa ikona.',
	'ACP_FLAIR_FONT_COLOR_EXPLAIN'	=> 'Kolor czcionki ilości osiągnięć kiedy użytkownik będzie miał więcej tego samego osiągnięcia. Zostaw puste aby ukryć ilość.',
	'ACP_FLAIR_GROUPS_EXPLAIN'		=> 'Członkowie wybranej grupy otrzymają automatycznie przydzielone osiągnięcie.',
	'ACP_FLAIR_GROUPS_AUTO_EXPLAIN'	=> 'Jeśli ta opcja będzie włączona, członkowie grup wybranych powyżej otrzymają automatycznie to osiągnięcie. Inaczej, członkowie grub będą mogli sobie przypisać tą osiągnięcie po przez Panel Użytkownika.',

	'ACP_FLAIR_TRIGGER_POST_COUNT'				=> 'Ilość postów',
	'ACP_FLAIR_TRIGGER_POST_COUNT_EXPLAIN'		=> 'Ustaw minimalny próg postów które użytkownik musi przekroczyć aby otrzymać osiągnięcie. Użytkownicy którzy już spełnili wymagania otrzymają to osiągnięcie po dodaniu nowego postu. Zostaw puste aby wyłączyć.',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS'			=> 'Dni od czasu rejestracji',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS_EXPLAIN'	=> 'Ustaw ilość dni aby użytkownik musi przekroczyć aby otrzymać osiągnięcie. Użytkownicy którzy już spełnili wymagania otrzymają to osiągnięcie po dodaniu nowego postu. Zostaw puste aby wyłączyć.',

	'ACP_FLAIR_IMAGES'						=> 'Zarządzaj ikonami',
	'ACP_FLAIR_IMAGES_EXPLAIN'				=> 'Tutaj możesz zarządzać twoimi ikonkami. Nie możesz usunąć ikonek które aktualnie wykorzystujesz w osiągnięciach.',
	'ACP_FLAIR_IMGS_EMPTY'					=> 'Nie znaleziono zestawów niestandardowych ikonek.',
	'ACP_FLAIR_ADD_IMG'						=> 'Dodaj ikona',
	'ACP_FLAIR_ADD_IMGS'					=> 'Dodaj ikony',
	'ACP_FLAIR_IMG_TABLE_EXPLAIN'			=> 'Możesz wgrać twoje niestandardowe ikonki do <b>images/flair</b>. SVG ikony można wgrać as-is can be uploaded jak jest. Każdy GIF, PNG, lub JPEG ikonka wymaga następujących plików:',
	'ACP_FLAIR_IMG_TABLE_NAME'				=> 'Nazwa pliku',
	'ACP_FLAIR_IMG_TABLE_SIZE'				=> 'Rekomendowana Wysokość',
	'ACP_FLAIR_IMG_TABLE_PLACEHOLDER'		=> 'icon_name',
	'ACP_FLAIR_IMG_TABLE_PX'				=> 'px',
	'ACP_FLAIR_IMG_UPLOADING'				=> 'Automatycznie wyślij ikonę',
	'ACP_FLAIR_UPLOAD_IMG'					=> 'Wgraj ikonę',
	'ACP_FLAIR_IMG_ADD_SUCCESS'				=> 'Niestandardowa ikonka została dodana',
	'ACP_FLAIR_IMG_DELETE_SUCCESS'			=> 'Niestandardowa ikonka została usunięta',
	'ACP_FLAIR_IMG_DELETE_ERRORED'			=> 'Nie można usunąć ikonki z powodu błędu',
	'ACP_FLAIR_DELETE_IMG_CONFIRM'			=> 'Czy na pewno chcesz usunąć tą rzecz?',
	'ACP_FLAIR_FORM_IMG_FILE'				=> 'Plik ikonki',
	'ACP_FLAIR_FORM_IMG_FILE_EXPLAIN'		=> 'Wybierz plik ikonki. Możesz wysłać każdy GIF, PNG, JPEG, lub SVG pliki. Kwadratowy obrazek przynajmniej 66px w wysokości jest rekomendowany.',
	'ACP_FLAIR_FORM_IMG_OVERWRITE'			=> 'Nadpisać istniejący',
	'ACP_FLAIR_FORM_IMG_OVERWRITE_EXPLAIN'	=> 'Włącz aby nadpisać każdy istniejący obrazek z tą samą nazwą.',

	'ACP_FLAIR_NAME'		=> 'Nazwa',
	'ACP_FLAIR_DISPLAY_ON'	=> 'Wyświetl na',
	'ACP_FLAIR_PROFILE'		=> 'Profil',
	'ACP_FLAIR_POSTS'		=> 'Post',

	'ACP_FLAIR_TYPE_FA'		=> 'Font Awesome',
	'ACP_FLAIR_TYPE_IMG'	=> 'Niestandardowa ikonka',

	'ACP_ERROR_APPEARANCE_REQUIRED'	=> 'Musisz ustawić przynajmniej kolor ikonki lub ikonka dla tego osiągnięcia.',
	'ACP_ERROR_IMG_REQUIRED'		=> 'Musisz ustawić obrazek dla osiągnięcia.',
	'ACP_ERROR_NOT_WRITABLE'		=> 'Katalog <b>images/flair</b> nie jest zapisywalny.',
	'ACP_ERROR_NO_IMG_LIB'			=> 'Musisz zainstawlować/włączyć Imagemagick (Rekomendowane) lub GD aby użyć tej funkcji z rastrowymi obrazkami. Tylko SVG obrazki będą dozwolone.',
	'ACP_ERROR_UPLOAD_INVALID'		=> 'Plik który wybrałeś jest nieakceptowalnym plikiem obrazka.',
	'ACP_ERROR_NOT_UPLOADED'		=> 'Nie można wysłać obrazka na serwer.',
));
