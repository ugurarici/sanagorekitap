<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//	hangi sayfalarımız olacak?

//	ana sayfa, son yanıtlanan sorular (yanıtlarıyla birlikte) listelenecek, sayfalama olacak

//	yeni soru sorma sayfası, sadece soru alanı ve opsiyonel e-posta alanı içeren bi form olabilir

//	soru / yanıt detayı	(ilgili soru ve yanıtını içeren detay sayfası, paylaşılabilir link)

//	sistemdeki kitapların liste sayfası

//	kitap detay sayfası	(kitap temel bilgileri ve bu kitabın yanıt olarak önerildiği soruların bir listesi)

// yazar detay sayfası (yazarın bilgileri, sistemimizde önerilen kitaplarının bir listesi ve kitaplarının önerildiği soruların bir listesi)

//	EDİTÖRLER İÇİN

//	henüz yanıtlanmamış soruları listeleyecekleri bir sayfa

//	yanıtlanmamış soruyu ve yanıtı yazabilecekleri formu görüntüleyecekleri sayfa (burada aynı zamanda kitap seçilecek, kitabın js ile aranıp seçilmesi lazım, yoksa hızlıca orada eklenebilmesi lazım vs) (bunu normal soru detayında da gösterebiliriz kişinin yetkisi varsa burayı göster gibi vs, bi bakmak lazım)

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('oneriler', 'QuestionController@index')->name('question.index');

Route::get('oneriler/iste', 'QuestionController@create')->name('question.create');

Route::post('oneriler', 'QuestionController@store')->name('question.store');

Route::get('oneriler/{question}', 'QuestionController@show')->name('question.show');

Route::get('kitaplar', 'BookController@index')->name('book.index');

Route::get('kitaplar/{book}', 'BookController@show')->name('book.show');

Route::get('yazarlar/{author}', 'AuthorController@show')->name('author.show');

