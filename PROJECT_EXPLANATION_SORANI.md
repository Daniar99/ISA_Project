# ڕێبەری تێگەیشتن و ئامادەکاریی تاقیکردنەوە

## پڕۆژەی Campus Assignment Tracker

ئەم ڕێبەرە بە کوردیی سۆرانی و لەسەر کۆدی ناو ئەم پڕۆژەیە نووسراوە. مەبەست ئەوەیە بزانیت هەر بەشێک چی دەکات، بۆچی هەیە، و چۆن بە زمانی خۆت بۆ مامۆستا ڕوونی بکەیتەوە.

پرسیارەکانی خوارەوە بۆ ڕاهێنان و ئامادەکاریین؛ نازانین مامۆستاکەت بە دڵنیایی کام پرسیار دەکات.

**چۆن بیخوێنیتەوە؟** یەکەم بەشەکانی ١ تا ٥ بخوێنەوە بۆ وێنەی گشتی. پاشان کۆدەکانی بەشەکانی ٦ تا ١٢ لەگەڵ فایلە ڕاستەقینەکان ببینە. لە کۆتاییدا بە Postman ڕاهێنان بکە و پرسیار و وەڵامەکان بە دەنگی بەرز بڵێوە.

## ناوەڕۆک

1. [پڕۆژەکە چییە؟](#overview)
2. [گرنگترین شتەکانی تاقیکردنەوە](#priorities)
3. [وشە تەکنیکییەکان بە سادەیی](#vocabulary)
4. [نەخشەی فایلەکان](#files)
5. [داتابەیس و خانەکان](#database)
6. [ڕێگای گەشتنی داواکاری و Route](#routes)
7. [پشکنینی داتا؛ Validation](#validation)
8. [Model و Eloquent](#model)
9. [Controller بە هەنگاوە سادەکان](#controller)
10. [Resource و وەڵامی JSON](#resource)
11. [Migration، Seeder و Factory](#data-tools)
12. [ڕووکار و JavaScript](#frontend)
13. [هێما و ڕستە گرنگەکانی کۆد](#syntax)
14. [کۆدەکانی HTTP و تاقیکردنەوەکان](#tests)
15. [کارپێکردن و پیشاندانی پڕۆژەکە](#demo)
16. [پرسیارە ئەگەرییەکانی مامۆستا و وەڵام](#questions)
17. [سنوورەکانی پڕۆژە و گەشەپێدانی داهاتوو](#limits)
18. [دەقی پێشکەشکردن و پلانی خوێندنەوە](#revision)
19. [پشکنینی ئەم ڕێبەرە](#verification)

<a id="overview"></a>

## ١. پڕۆژەکە چییە؟

ناوی پڕۆژەکە **Campus Assignment Tracker** ـە؛ واتە سیستەمێک بۆ تۆمارکردن و بەدواداچوونی ئەرکەکانی خوێندکار.

بۆ نموونە، ئەرکێکت هەیە بۆ وانەی داتابەیس. دەتەوێت ناوی ئەرکەکە، کۆدی وانەکە، کاتی تەسلیمکردن، گرنگی و دۆخی ئەرکەکە تۆمار بکەیت. دواتر دەتوانیت دۆخەکە بگۆڕیت یان نمرەی بۆ دابنێیت.

پڕۆژەکە دەتوانێت:

- ئەرکی نوێ زیاد بکات.
- هەموو ئەرکەکان یان یەک ئەرک پیشان بدات.
- ئەرکەکان بە پێی دۆخ جیا بکاتەوە.
- زانیاریی ئەرکێک بگۆڕێت.
- ئەرکێک بسڕێتەوە.
- ژمارەی هەموو ئەرکەکان و هەندێک دۆخ پیشان بدات.

**نموونەیەکی تەواو:** ئەرکێک بە ناوی `Database Lab` زیاد دەکەیت. سەرەتا دۆخەکە `pending` ـە. کاتێک دەست پێ دەکەیت دەیکەیتە `in_progress`، دوای تەسلیمکردن `submitted`، و دوای نمرەدان `graded` لەگەڵ نمرەیەکی وەک `92`.

ئەمە ڕیزبەندییەکی ئاساییی بەکارهێنانە؛ کۆدی API ناچارت ناکات بە هەموو ئەم قۆناغانەدا بڕۆیت. دەتوانیت ڕاستەوخۆ دۆخێکی ڕێگەپێدراو هەڵبژێریت.

### پڕۆژەکە لە چی دروست کراوە؟

| بەش | تەکنەلۆژیا | کاری چییە؟ |
| --- | --- | --- |
| پشتەوە؛ Backend | PHP و Laravel | وەرگرتنی داواکاری، پشکنین و کارکردن لەگەڵ داتابەیس |
| ڕووکار؛ Frontend | Blade، HTML و JavaScript | پیشاندانی پەڕە و وەرگرتنی کردارەکانی بەکارهێنەر |
| جوانکاری | Tailwind CSS لە CDN | ڕەنگ، دوگمە، بۆکس و ڕێکخستنی پەڕە |
| گواستنەوەی داتا | JSON و HTTP | پەیوەندیی ڕووکار و API |
| داتابەیسی پێشنیارکراوی نموونە | SQLite | هەڵگرتنی داتا لە فایلێکدا |
| تاقیکردنەوەی دەستی | Postman | ناردنی داواکاری بۆ API |
| تاقیکردنەوەی ئۆتۆماتیکی | PHPUnit | پشکنینی ئەنجامی داواکاری و داتابەیس |

لە `composer.lock` وەشانی Laravel ـی تۆمارکراو `v13.39.0` ـە. لە `composer.json` داوای PHP بە وەشانی `8.3` یان بەرزتر کراوە. ڕێکخستنی نموونەی `.env.example`، SQLite بەکاردەهێنێت؛ داتابەیسی کاراکراوی کۆمپیوتەرەکەت بە ڕێکخستنی `.env` دیاری دەکرێت.

<a id="priorities"></a>

## ٢. گرنگترین شتەکان کە دەبێت تێیان بگەیت

ئەگەر کاتت کەمە، یەکەم ئەم خاڵانە فێر ببە:

| گرنگی | بابەت | دەبێت بتوانیت چی بڵێیت؟ |
| --- | --- | --- |
| زۆر گرنگ | ئامانجی پڕۆژە | سیستەمێکە بۆ بەڕێوەبردنی ئەرکەکانی خوێندکار |
| زۆر گرنگ | CRUD | زیادکردن، خوێندنەوە، نوێکردنەوە و سڕینەوە |
| زۆر گرنگ | Route | داواکارییەکە دەگەیەنێتە مێثۆدی گونجاوی Controller |
| زۆر گرنگ | Controller | کارەکە بەڕێوە دەبات و Model و Resource بەکاردەهێنێت |
| زۆر گرنگ | Model | بە Eloquent لەگەڵ خشتەی داتابەیس کار دەکات |
| زۆر گرنگ | Validation | پێش پاشەکەوتکردن، دروستیی داتا دەپشکنێت |
| زۆر گرنگ | Resource | دیاری دەکات داتا بە چ شێوەیەک لە JSON بگەڕێتەوە |
| زۆر گرنگ | HTTP status | واتای `200`، `201`، `204`، `404` و `422` بزانیت |
| گرنگ | Migration | پێکهاتەی خشتەکان بە کۆد دروست دەکات |
| گرنگ | PATCH | تەنها خانە نێردراوەکان دەگۆڕێت |
| گرنگ | Route Model Binding | Laravel بە ID، ئەرکەکە دەدۆزێتەوە یان `404` دەدات |
| گرنگ | fetch | JavaScript پەیوەندی بە API دەکات |

**ڕستەیەک بۆ لەبیرکردن:**

> Route ڕێگا دیاری دەکات، Request داتا دەپشکنێت، Controller کارەکە بەڕێوە دەبات، Model لەگەڵ داتابەیس کار دەکات، Resource وەڵامەکە ڕێک دەخات.

<a id="vocabulary"></a>

## ٣. وشە تەکنیکییەکان بە زمانی سادە

| وشە | مانای سادە | نموونە لە پڕۆژەکەت |
| --- | --- | --- |
| Client | ئەو بەشەی داواکاری دەنێرێت | وێبگەڕ یان Postman |
| Server | ئەو بەشەی داواکاری وەردەگرێت و وەڵام دەدات | ئەپی Laravel |
| API | دەرگایەک بۆ کارکردن لەگەڵ داتای سیستەم | `/api/assignments` |
| Endpoint | ناونیشانێکی دیاریکراوی API | `GET /api/assignments/5` |
| Request | داواکاریی نێردراو بۆ سێرڤەر | «ئەم ئەرکە زیاد بکە» |
| Response | وەڵامی سێرڤەر | داتای ئەرکە نوێکە لەگەڵ `201` |
| JSON | شێوازێکی دەقی بۆ گواستنەوەی داتا | `{"title":"Database Lab"}` |
| CRUD | چوار کارە سەرەکییەکە لەسەر داتا | Create، Read، Update، Delete |
| Validation | پشکنینی دروستیی داتا | ناو بەتاڵ نەبێت؛ نمرە لە `0` تا `100` بێت |
| Database | شوێنی پاشەکەوتکردنی داتا | خشتەی `assignments` |
| Record / Row | یەک تۆمار لە خشتە | یەک ئەرک |
| Column / Field | یەک خانەی تۆمار | `title` یان `grade` |
| ORM | کارکردن لەگەڵ داتابەیس بە شێوەی ئۆبجێکت | Eloquent |
| Authentication | ناسینەوەی ئەوەی کێیت | چوونەژوورەوە؛ لەم پڕۆژەیە چالاک نییە |
| Authorization | بڕیاردان لەسەر مافی ئەنجامدانی کارێک | کێ مافی سڕینەوەی ئەرکەکەی هەیە؟ |

### API و ڕووکار چ جیاوازییەکیان هەیە؟

ڕووکار ئەو دوگمە، فۆرم و کارتانەن کە دەیانبینیت. API داتا و کارەکانی پشت ئەو ڕووکارە بەڕێوە دەبات.

بۆیە دوو ڕێگا بۆ کارکردن لەگەڵ هەمان داتا هەیە:

```text
Browser dashboard --> Laravel API --> Database
Postman           --> Laravel API --> Database
```

ئەگەر بە Postman ئەرکێک زیاد بکەیت، دوای نوێکردنەوەی لیست، لە ڕووکارەکەش دەردەکەوێت.

<a id="files"></a>

## ٤. نەخشەی فایلە گرنگەکان

| فایل | کاری چییە؟ |
| --- | --- |
| [public/index.php](public/index.php) | دەروازەی وەرگرتنی داواکاری؛ Laravel کار پێ دەکات و داواکارییەکەی پێ دەدات |
| [routes/web.php](routes/web.php) | کاتێک `/` دەکەیتەوە، پەڕەی `welcome` دەگەڕێنێتەوە |
| [routes/api.php](routes/api.php) | پێنج ڕێگای API دیاری دەکات |
| [AssignmentController.php](app/Http/Controllers/Api/AssignmentController.php) | لیست، زیادکردن، پیشاندانی یەک ئەرک، نوێکردنەوە و سڕینەوە |
| [Assignment.php](app/Models/Assignment.php) | Model ـی ئەرک و پەیوەندی بە خشتەی `assignments` |
| [StoreAssignmentRequest.php](app/Http/Requests/StoreAssignmentRequest.php) | یاساکانی زیادکردنی ئەرک |
| [UpdateAssignmentRequest.php](app/Http/Requests/UpdateAssignmentRequest.php) | یاساکانی نوێکردنەوەی ئەرک |
| [AssignmentResource.php](app/Http/Resources/AssignmentResource.php) | شێوەی وەڵامی JSON |
| [Migration ـی assignments](database/migrations/2026_10_28_174736_create_assignments_table.php) | دروستکردنی خشتە و خانەکان |
| [AssignmentSeeder.php](database/seeders/AssignmentSeeder.php) | زیادکردنی چوار ئەرکی نموونە |
| [DatabaseSeeder.php](database/seeders/DatabaseSeeder.php) | بانگکردنی `AssignmentSeeder` |
| [AssignmentFactory.php](database/factories/AssignmentFactory.php) | دروستکردنی داتای ساختە بۆ تاقیکردنەوە |
| [welcome.blade.php](resources/views/welcome.blade.php) | HTML، جوانکاری و کۆدی JavaScript ـی ڕووکار |
| [bootstrap/app.php](bootstrap/app.php) | پەیوەستکردنی فایلەکانی Route و ڕێکخستنی وەڵامی هەڵە |
| [AssignmentApiTest.php](tests/Feature/AssignmentApiTest.php) | تاقیکردنەوەی API |
| [phpunit.xml](phpunit.xml) | ڕێکخستنی تاقیکردنەوە؛ داتابەیسی کاتیی SQLite |
| [Postman collection](Campus_Assignment_Tracker_API.postman_collection.json) | داواکارییە ئامادەکان بۆ تاقیکردنەوەی دەستی |
| [composer.json](composer.json) | پەکەجەکانی PHP و مەرجی وەشانەکان |
| [package.json](package.json) | پەکەج و فەرمانەکانی بەشی JavaScript/Vite |

فۆڵدەری `vendor` کۆدی پەکەجە دامەزراوەکانە، وەک Laravel. بۆ تێگەیشتن لە پڕۆژەکەت پێویست ناکات هەمووی بخوێنیتەوە.

فایلەکانی `User` و خشتەکانی `users`، `cache` و `jobs` بەشێکن لە بنەمای ئەپی Laravel. بوونیان بەو مانایە نییە کە سیستەمی Login، بەڕێوەبردنی بەکارهێنەر یان Queue لە کارەکانی ئەرکەکاندا جێبەجێ کراوە.

<a id="database"></a>

## ٥. داتابەیس؛ هەر ئەرکێک چ زانیارییەکی هەیە؟

خشتەی سەرەکی ناوی **`assignments`** ـە. هەر ڕیزێک یەک ئەرکە.

| خانە | جۆری خانە لە Migration | مانا و نموونە |
| --- | --- | --- |
| `id` | ID | ناسنامەی تایبەتی هەر ئەرک؛ وەک `5` |
| `title` | string | ناوی ئەرک؛ وەک `Database Lab` |
| `course_code` | string، تا 20 پیت | کۆدی وانە؛ وەک `DB201` |
| `description` | text، nullable | وەسفی ئەرک؛ دەتوانێت بەتاڵ بێت |
| `due_date` | date | ڕێکەوتی تەسلیمکردن |
| `priority` | enum | `low`، `medium` یان `high` |
| `status` | enum | `pending`، `in_progress`، `submitted` یان `graded` |
| `grade` | unsignedTinyInteger، nullable | نمرە؛ Validation ڕێگە بە `0` تا `100` دەدات |
| `created_at` | timestamp | کاتی دروستکردنی تۆمار |
| `updated_at` | timestamp | کاتی دوایین نوێکردنەوە |

### دۆخ و گرنگییەکان

| بەها | مانا |
| --- | --- |
| `pending` | چاوەڕوانە؛ هێشتا دەست پێ نەکراوە |
| `in_progress` | کار لەسەر ئەرکەکە دەکرێت |
| `submitted` | ئەرکەکە تەسلیم کراوە |
| `graded` | نمرەی بۆ دانراوە |
| `low` | گرنگیی کەم |
| `medium` | گرنگیی مامناوەند |
| `high` | گرنگیی زۆر |

### سێ خاڵی گرنگ

**١. Default:** ئەگەر لە زیادکردندا `priority` نەنێریت، داتابەیس `medium` دادەنێت. ئەگەر `status` نەنێریت، `pending` دادەنێت.

**٢. null:** واتە بەهایەک دیاری نەکراوە. `grade: null` واتە نمرە دانەنراوە. `grade: 0` واتە نمرەکە سفرە. ئەمانە جیاوازن.

**٣. Primary key:** خانەی `id` تۆمارەکان لە یەکتر جیا دەکاتەوە. لەم خشتەیەدا `user_id` یان پەیوەندی بە خشتەی بەکارهێنەران نییە؛ ئەرکەکان خاوەنی تایبەتیان بۆ دیاری نەکراوە.

<a id="routes"></a>

## ٦. داواکاری چۆن دەگاتە کۆد؟

دەروازەی سەرەتاییی داواکاریی وێب `public/index.php` ـە. ئەو فایلە `vendor/autoload.php` بار دەکات بۆ ناساندنی کلاسەکان، `bootstrap/app.php` دەخوێنێتەوە بۆ ئامادەکردنی ئەپ، پاشان داواکارییەکە دەدات بە Laravel. دوای ئەوە Route و بەشەکانی تر کارەکە بەڕێوە دەبەن.

وای دابنێ دوگمەی زیادکردن دەگرێت. ئەم هەنگاوانە ڕوو دەدەن:

```text
User fills the form
        |
        v
JavaScript: POST /api/assignments
        |
        v
Route: routes/api.php
        |
        v
StoreAssignmentRequest: validation
        |
        v
AssignmentController: store()
        |
        v
Assignment Model --> assignments table
        |
        v
AssignmentResource --> JSON response + 201
        |
        v
JavaScript reloads the list
```

ئەگەر داتا هەڵە بێت، لە قۆناغی Validation وەڵامی `422` دەگەڕێتەوە و کۆدی پاشەکەوتکردن لە `store()` جێبەجێ نابێت.

### Route واتە چی؟

Route وەک ڕێنیشاندەرە: دەڵێت «ئەگەر ئەم جۆرە داواکارییە بۆ ئەم ناونیشانە هات، ئەم مێثۆدە بانگ بکە».

لە [routes/api.php](routes/api.php):

```php
Route::get('/assignments', [AssignmentController::class, 'index']);
```

- `get`: جۆری داواکارییەکە `GET` ـە؛ بۆ خوێندنەوە.
- `/assignments`: ڕێگای داواکارییەکەیە لە فایلی API.
- `AssignmentController::class`: ناوی Controller ـەکەیە.
- `'index'`: ناوی ئەو مێثۆدەیە کە بانگ دەکرێت.

Laravel بۆ ئەم ڕێگایانە پێشگری `/api` زیاد دەکات. بۆیە ناونیشانی تەواو `/api/assignments` ـە. فایلی `bootstrap/app.php`، `routes/api.php` بە ئەپەکە پەیوەست دەکات.

### پێنج Route ـی پڕۆژەکەت

| HTTP method | ناونیشان | مێثۆدی Controller | کار |
| --- | --- | --- | --- |
| `GET` | `/api/assignments` | `index` | هێنانی لیست |
| `POST` | `/api/assignments` | `store` | زیادکردنی ئەرک |
| `GET` | `/api/assignments/{assignment}` | `show` | هێنانی یەک ئەرک |
| `PATCH` | `/api/assignments/{assignment}` | `update` | نوێکردنەوەی ئەرک |
| `DELETE` | `/api/assignments/{assignment}` | `destroy` | سڕینەوەی ئەرک |

لە `/api/assignments/5`، ژمارەی `5` شوێنی `{assignment}` دەگرێتەوە.

### `whereNumber` چی دەکات؟

```php
Route::get('/assignments/{assignment}', [AssignmentController::class, 'show'])
    ->whereNumber('assignment');
```

ڕێگە دەدات ئەو بەشەی ناونیشانەکە ژمارە بێت. `/api/assignments/abc` لەگەڵ ئەم ڕێگایە ناگونجێت و `404` دەگەڕێتەوە.

### Route Model Binding چییە؟

لە Controller دەبینیت:

```php
public function show(Assignment $assignment): AssignmentResource
```

Laravel ناوی `{assignment}` و جۆری `Assignment` دەبینێت. ئەگەر ID ـەکە `5` بێت، تۆماری `5` لە داتابەیس دەدۆزێتەوە و دەیدات بە `$assignment`.

ئەگەر تۆمارەکە نەبێت، Laravel خۆی `404` دەگەڕێنێتەوە. بۆیە لە `show()` پێویست نەبووە دەستی بە `find()` بگەڕێیت یان هەر جارێک پشکنینی نەبوونی تۆمار بنووسیتەوە.

<a id="validation"></a>

## ٧. Validation؛ داتا پێش پاشەکەوتکردن بپشکنە

فەرزی بکە کەسێک ناوی ئەرک بەتاڵ بنێرێت یان نمرەی `150` بنێرێت. Validation ڕێگە نادات ئەم داتایە لە ڕێگای ئەم API ـەوە پاشەکەوت بکرێت.

دوو فایلی سەرەکی هەن:

- [StoreAssignmentRequest](app/Http/Requests/StoreAssignmentRequest.php): بۆ زیادکردن.
- [UpdateAssignmentRequest](app/Http/Requests/UpdateAssignmentRequest.php): بۆ نوێکردنەوە.

هەردووکیان لە `FormRequest` وەرگیراون؛ واتە Laravel دەتوانێت یاساکانیان پێش جێبەجێکردنی مێثۆدی Controller بپشکنێت.

### `authorize()` چییە؟

```php
public function authorize(): bool
{
    return true;
}
```

ئەم مێثۆدە بڕیار دەدات ئەم داواکارییە ڕێگەپێدراوە یان نا. `true` واتە لەم Form Request ـەدا ڕێگەی پێ دەدرێت. ئەمە سیستەمی Login یان پشکنینی خاوەندارێتی دروست ناکات. ڕێگاکانی ئەم پڕۆژەیە گشتین.

### واتای یاساکان

| یاسا | مانای سادە |
| --- | --- |
| `required` | خانەکە پێویستە هەبێت و بەتاڵ نەبێت |
| `string` | دەبێت دەق بێت |
| `max:255` لەسەر دەق | زۆرترین درێژی 255 پیتە |
| `nullable` | بەهای `null` ڕێگەپێدراوە |
| `sometimes` | تەنها ئەگەر خانەکە نێردرابێت، یاساکانی بپشکنە |
| `date` | بەهایەکی ڕێکەوتی دروست بێت |
| `after_or_equal:today` | ئەمڕۆ یان دوای ئەمڕۆ بێت |
| `integer` | بەهای ژمارەی تەواو بێت |
| `min:0` و `max:100` لەسەر نمرە | بەهاکە لە نێوان 0 و 100 بێت |
| `in:low,medium,high` | تەنها یەکێک لەم بەهایانە ڕێگەپێدراوە |

کۆدەکە یاسای `date` بەکاردەهێنێت، نەک `date_format:Y-m-d`. لە نموونە و وەڵامەکاندا شێوەی `YYYY-MM-DD` بەکار دێت؛ مەڵێ Validation تەنها ئەم شێوە دەقە دەپسەندێنێت.

### یاساکانی زیادکردن

```php
'title' => ['required', 'string', 'max:255'],
'course_code' => ['required', 'string', 'max:20'],
'description' => ['nullable', 'string', 'max:5000'],
'due_date' => ['required', 'date', 'after_or_equal:today'],
'priority' => ['sometimes', 'required', 'string', 'in:low,medium,high'],
'status' => ['sometimes', 'required', 'string', 'in:pending,in_progress,submitted,graded'],
'grade' => ['nullable', 'integer', 'min:0', 'max:100'],
```

بە سادەیی: ناو، کۆدی وانە و ڕێکەوت پێویستن. وەسف و نمرە دەتوانن دیاری نەکرێن. گرنگی و دۆخ ئەگەر نەنێردرێن، بەها بنەڕەتییەکانی داتابەیس بەکار دێن.

### خاڵێکی زۆر گرنگ: نەبوون و null یەک شت نین

بۆ `priority` ئەم یاسایە هەیە:

```php
['sometimes', 'required', 'string', 'in:low,medium,high']
```

| چی نێردراوە؟ | ئەنجام |
| --- | --- |
| خانەی `priority` هەر نەنێردراوە | ڕێگەپێدراوە؛ لە زیادکردندا default ـەکە `medium` ـە |
| `"priority": "high"` | ڕێگەپێدراوە |
| `"priority": null` | هەڵە؛ `required` ڕێگە نادات |
| `"priority": ""` | هەڵە؛ بەتاڵە |
| `"priority": "critical"` | هەڵە؛ لە لیستی `in` نییە |

### بۆچی یاساکانی Update جیاوازن؟

```php
'title' => ['sometimes', 'required', 'string', 'max:255'],
'due_date' => ['sometimes', 'required', 'date'],
```

لە PATCH پێویست ناکات هەموو خانەکان دووبارە بنێریت. بۆ نموونە:

```json
{
  "status": "submitted"
}
```

تەنها `status` دەگۆڕدرێت. ناو و ڕێکەوت و خانەکانی تر بە هەمان شێوە دەمێننەوە.

بەڵام ئەگەر `"title": ""` بنێریت، هەڵەیە؛ چونکە خانەکەت ناردووە و `required` دەبێت جێبەجێ بێت. ناردنی `{}` بۆ PATCH هیچ خانەیەک ناگۆڕێت و `200` دەگەڕێتەوە.

### بۆچی ڕێکەوتی کۆن لە Update ڕێگەپێدراوە؟

لە زیادکردندا `after_or_equal:today` هەیە، بەڵام لە نوێکردنەوەدا نییە. ئەمە ڕێگە دەدات ئەرکێکی کۆن یان دواکەوتوو هێشتا دەستکاری بکرێت. ڕێکەوتەکان بە کاتی ئەپ هەژمار دەکرێن؛ لە `config/app.php` کاتی ئەپ `UTC` ـە.

### `validated()` چی دەکات؟

```php
$request->validated()
```

تەنها داتای پشکنراو بە یاساکان دەگەڕێنێتەوە. ئەگەر کەسێک خانەیەکی زیادەی وەک `is_admin` بنێرێت، ئەم کۆدە ئەو خانە زیادەیە بۆ `create()` یان `update()` نانێرێت.

**یادت بێت:** `$fillable` و Validation دوو کاری جیاوازن. Validation دروستیی بەها دەپشکنێت؛ `$fillable` دیاری دەکات کام خانەکان بە کۆمەڵە داتا دەتوانرێت پڕ بکرێنەوە.

<a id="model"></a>

## ٨. Model و Eloquent

فایل: [app/Models/Assignment.php](app/Models/Assignment.php).

```php
class Assignment extends Model
```

واتە کلاسێک بە ناوی `Assignment` هەیە و تواناکانی `Model` ـی Laravel وەردەگرێت. بە یاسای ناونانی Laravel، `Assignment` بە خشتەی `assignments` پەیوەست دەبێت.

**نموونەی بیرکردنەوە:** خشتەکە وەک خشتەیەکی Excel ـە. Model ئەو ڕێگایەیە کە لە کۆدی PHP ـەوە تۆمارەکان زیاد، بخوێنیتەوە یان بگۆڕیت.

### `$fillable`

```php
protected $fillable = [
    'title',
    'course_code',
    'description',
    'due_date',
    'priority',
    'status',
    'grade',
];
```

ئەم لیستە دەڵێت کام خانەکان دەتوانرێت لە کارێکی وەک `create($data)` یان `update($data)` بە کۆمەڵە داتا پڕ بکرێنەوە. ئەم جۆرە پڕکردنەوەیە پێی دەوترێت **Mass Assignment**.

`id` لەم لیستەدا نییە؛ داتابەیس خۆی ID بۆ تۆماری نوێ دروست دەکات. `$fillable` جێگەی پشکنینی جۆر و سنووری بەهاکان ناگرێتەوە.

### `casts()`

```php
protected function casts(): array
{
    return [
        'due_date' => 'date',
        'grade' => 'integer',
    ];
}
```

- `due_date`: Laravel لە خوێندنەوەی ئەم خانەیەدا مامەڵەی ڕێکەوتی لەگەڵ دەکات، بۆیە دەتوانیت `format()` بەکار بهێنیت.
- `grade`: بەهای نمرە وەک ژمارەی تەواو دەخوێنرێتەوە. ئەگەر بەهاکە `null` بێت، `null` دەمێنێتەوە.

### `HasFactory`

```php
use HasFactory;
```

ڕێگە دەدات بەم شێوەیە داتای تاقیکردنەوە دروست بکەیت:

```php
Assignment::factory()->create();
```

### Eloquent بۆچی سوودبەخشە؟

دەتوانیت بە PHP کار لەگەڵ داتابەیس بکەیت، بۆ نموونە:

```php
Assignment::create($data);
$assignment->update($data);
$assignment->delete();
```

لەبری نووسینی دەستیی `INSERT`، `UPDATE` و `DELETE`، Eloquent ئەو کارانە بەڕێوە دەبات. ئەمە هێشتا کارکردن لەگەڵ داتابەیسە؛ تەنها شێوەی نووسینی کۆدەکە ئاسانترە.

<a id="controller"></a>

## ٩. Controller؛ پێنج کاری سەرەکی

فایل: [AssignmentController.php](app/Http/Controllers/Api/AssignmentController.php).

Controller وەک بەڕێوەبەری کارەکەیە. لەم پڕۆژەیەدا داتا بە Model دەخوێنێتەوە یان پاشەکەوت دەکات، پاشان بە Resource وەڵام دەداتەوە.

### ٩.١. `index()`؛ هێنانی لیستی ئەرکەکان

```php
public function index(Request $request): AnonymousResourceCollection
{
    $request->validate([
        'status' => ['nullable', 'string', 'in:pending,in_progress,submitted,graded'],
    ]);

    $query = Assignment::query();

    if ($request->filled('status')) {
        $query->where('status', $request->query('status'));
    }

    $assignments = $query->orderBy('due_date')->orderBy('id')->get();

    return AssignmentResource::collection($assignments);
}
```

هەنگاو بە هەنگاو:

1. `status` دەپشکنێت؛ ئەگەر بەهایەکی نەناسراو بێت، `422` دەگەڕێتەوە.
2. `Assignment::query()` دەست بە ئامادەکردنی پرسیارێکی داتابەیس دەکات؛ هێشتا لیستەکە نەهاتووە.
3. `filled('status')` دەپشکنێت ئایا بەهایەکی نابەتاڵ بۆ فلتەر نێردراوە.
4. `where()` مەرج زیاد دەکات: تەنها ئەرکەکانی ئەو دۆخە بهێنە.
5. `orderBy('due_date')` ڕیزبەندی لە ڕێکەوتی زووترەوە دەکات.
6. `orderBy('id')` بۆ ئەرکەکانی هەمان ڕێکەوت، ID ـی بچووکتر پێش دەخات.
7. `get()` پرسیارەکە جێبەجێ دەکات و تۆمارەکان دەهێنێت.
8. `collection()` هەموو ئەرکەکان بە شێوەی `AssignmentResource` دەگەڕێنێتەوە.

نموونە:

```text
GET /api/assignments
GET /api/assignments?status=pending
```

لە دووەمدا `status=pending` بەشی **Query String** ـە؛ هەڵبژاردەی فلتەرە، نەک ID.

### ٩.٢. `store()`؛ زیادکردنی ئەرک

```php
public function store(StoreAssignmentRequest $request): JsonResponse
{
    $assignment = Assignment::create($request->validated());
    $assignment->refresh();

    return (new AssignmentResource($assignment))
        ->response()
        ->setStatusCode(Response::HTTP_CREATED);
}
```

1. بەهۆی `StoreAssignmentRequest`، داتا پێش چوونە ناو مێثۆدەکە پشکنراوە.
2. `validated()` داتای پشکنراو دەداتەوە.
3. `create()` تۆمارێکی نوێ لە داتابەیس دروست دەکات.
4. `refresh()` هەمان ئۆبجێکت لە داتابەیسەوە نوێ دەکاتەوە.
5. `AssignmentResource` شێوەی داتای وەڵام دیاری دەکات.
6. `HTTP_CREATED` واتە کۆدی `201`؛ شتێکی نوێ دروست کراوە.

**بۆچی `refresh()` گرنگە؟** بەها بنەڕەتییەکانی `priority` و `status` لە داتابەیسدا دانراون. ئەگەر ئەو خانانەت نەناردبێت، `refresh()` دڵنیا دەکات کە وەڵامی POST ـەکە ئەو بەهایانەی تێدایە. ئەمە دووبارە تۆمار دروست ناکات؛ تەنها تۆمارەکە دەخوێنێتەوە.

### ٩.٣. `show()`؛ هێنانی یەک ئەرک

```php
public function show(Assignment $assignment): AssignmentResource
{
    return new AssignmentResource($assignment);
}
```

Route Model Binding ئەرکەکەی دۆزیوەتەوە. ئەم مێثۆدە تەنها بە شێوەی Resource دەیگەڕێنێتەوە. وەڵامی سەرکەوتوو `200` ـە.

### ٩.٤. `update()`؛ نوێکردنەوە

```php
public function update(UpdateAssignmentRequest $request, Assignment $assignment): AssignmentResource
{
    $assignment->update($request->validated());

    return new AssignmentResource($assignment);
}
```

Laravel ئەرکەکە دەدۆزێتەوە و داتای نێردراو دەپشکنێت. `update()` تەنها خانە نێردراو و پشکنراوەکان دەگۆڕێت. دواتر داتای نوێ بە `200` دەگەڕێتەوە.

نموونە:

```json
{
  "status": "graded",
  "grade": 92
}
```

### ٩.٥. `destroy()`؛ سڕینەوە

```php
public function destroy(Assignment $assignment): Response
{
    $assignment->delete();

    return response()->noContent();
}
```

`delete()` تۆمارەکە لە داتابەیس دەسڕێتەوە. `noContent()` وەڵامی `204` دەگەڕێنێتەوە؛ واتە کارەکە سەرکەوتوو بووە و جەستەی وەڵام بەتاڵە.

لەم Model ـەدا `SoftDeletes` نییە؛ ئەمە سڕینەوەی ئاساییی تۆمارە، نەک تەنها شاردنەوەی.

<a id="resource"></a>

## ١٠. Resource؛ داتا چۆن دەگەڕێتەوە؟

فایل: [AssignmentResource.php](app/Http/Resources/AssignmentResource.php).

```php
return [
    'id' => $this->id,
    'title' => $this->title,
    'course_code' => strtoupper((string) $this->course_code),
    'description' => $this->description,
    'due_date' => $this->due_date?->format('Y-m-d'),
    'priority' => $this->priority,
    'status' => $this->status,
    'grade' => $this->grade,
    'created_at' => $this->created_at?->toIso8601String(),
];
```

Resource دیاری دەکات کام خانەکان بۆ Client بنێردرێن و بە چ شێوەیەک بنوێنرێن. بۆ نموونە، `updated_at` لە داتابەیس هەیە، بەڵام لەم وەڵامەدا نییە.

### بۆچی `strtoupper()`؟

```php
'course_code' => strtoupper((string) $this->course_code),
```

پیتەکان لە وەڵامدا دەکاتە گەورە. ئەگەر `cs302` بنێریت، API لە وەڵامدا `CS302` پیشان دەدات.

**ئەمە تەنها شێوەی وەڵام دەگۆڕێت.** لەم پڕۆژەیەدا کۆدی گۆڕینی پیتی گەورە بۆ پاشەکەوتکردنی داتابەیس نییە؛ دەتوانێت لە داتابەیس هەر `cs302` هەڵگیرابێت. تاقیکردنەوەی پڕۆژەکەش ئەم جیاوازییە دەپشکنێت.

### `?->` چییە؟

```php
$this->due_date?->format('Y-m-d')
```

ئەگەر `due_date` بەهای هەبوو، `format()` بانگ دەکات. ئەگەر `null` بوو، بەبێ بانگکردنی مێثۆدەکە `null` دەگەڕێنێتەوە. ئەم هێمایە پێی دەوترێت Null-safe operator.

`Y-m-d` واتە ساڵ، مانگ و ڕۆژ؛ وەک `2026-11-20`. `toIso8601String()` کاتی دروستکردن بە شێوەیەکی ستاندارد دەگەڕێنێتەوە.

### جیاوازی Model و Resource

| Model | Resource |
| --- | --- |
| لەگەڵ داتابەیس کار دەکات | داتای وەڵام ڕێک دەخات |
| `create`، `update` و `delete` دەکات | خانەکان هەڵدەبژێرێت و شێوەیان دەگۆڕێت |
| داتای پاشەکەوتکراو نوێنەرایەتی دەکات | شێوەی پیشاندانی ئەو داتایە بۆ Client دیاری دەکات |

### وەڵامی یەک ئەرک و چەند ئەرک

یەک ئەرک، بە شێوەی کورتکراو:

```json
{
  "data": {
    "id": 5,
    "title": "Database Lab",
    "course_code": "DB201"
  }
}
```

لیستی ئەرکەکان، بە شێوەی کورتکراو:

```json
{
  "data": [
    { "id": 5, "title": "Database Lab" },
    { "id": 6, "title": "Network Lab" }
  ]
}
```

لە یەکەمدا `data` ئۆبجێکتە؛ لە دووەمدا لیستە. لە JavaScript بۆیە `result.data` بەکاردێت، چونکە Laravel Resource لەم پڕۆژەیەدا داتا لە ژێر کلیلی `data` دادەنێت.

<a id="data-tools"></a>

## ١١. Migration، Seeder و Factory

ئەم سێیانە زۆرجار لە تاقیکردنەوەدا تێکەڵ دەکرێن. ئەم نموونەیە لەبیر بکە:

> Migration خشتەکە دروست دەکات؛ Seeder داتای نموونەی تێدەخات؛ Factory داتای ساختە بۆ تاقیکردنەوە دروست دەکات.

### ١١.١. Migration؛ پێکهاتەی داتابەیس

فایل: [Migration ـی assignments](database/migrations/2026_10_28_174736_create_assignments_table.php).

```php
public function up(): void
{
    Schema::create('assignments', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('course_code', 20);
        $table->text('description')->nullable();
        $table->date('due_date');
        $table->enum('priority', ['low', 'medium', 'high'])->default('medium');
        $table->enum('status', ['pending', 'in_progress', 'submitted', 'graded'])->default('pending');
        $table->unsignedTinyInteger('grade')->nullable();
        $table->timestamps();
    });
}
```

- `up()`: گۆڕانکارییەکە جێبەجێ دەکات؛ لێرە خشتە دروست دەکات.
- `Schema::create()`: خشتەی نوێ بە ناوی `assignments` دروست دەکات.
- `Blueprint $table`: ئامرازێکە بۆ دیاریکردنی خانەکانی خشتە.
- `nullable()`: خانەکە دەتوانێت `null` هەبێت.
- `default()`: ئەگەر بەها نەدرا، ئەم بەهایە بەکار بهێنە.
- `timestamps()`: دوو خانەی `created_at` و `updated_at` زیاد دەکات؛ Eloquent بە ئاسایی بەڕێوەیان دەبات.

```php
public function down(): void
{
    Schema::dropIfExists('assignments');
}
```

`down()` پێچەوانەی گۆڕانکارییەکە ئەنجام دەدات. لێرە خشتەکە دەسڕێتەوە؛ بۆیە گەڕاندنەوەی ئەم Migration ـە داتای ئەو خشتەیەش لەناو دەبات.

فەرمانی `php artisan migrate`، Migration ـە جێبەجێنەکراوەکان جێبەجێ دەکات؛ هەر جارێک خشتەکانی پێشوو دووبارە دروست ناکات.

**خاڵی گرنگ:** سنووری نمرەی `0–100` لە Form Request هەیە. تەنها بوونی ناوی `unsignedTinyInteger` بەو مانایە نییە کە یاسای نمرەی ئەم سیستەمە بە تەواوی جێبەجێ کراوە.

### ١١.٢. Seeder؛ داتای ئامادە بۆ پیشاندان

لە [DatabaseSeeder.php](database/seeders/DatabaseSeeder.php):

```php
$this->call([
    AssignmentSeeder::class,
]);
```

ئەمە `AssignmentSeeder` بانگ دەکات. ئەو Seeder ـە چوار ئەرک زیاد دەکات؛ بە دۆخەکانی `in_progress`، `pending`، `submitted` و `graded`. ئەرکە نمرەدراوەکە نمرەی `95` ـی هەیە.

نموونەی ڕێکەوت:

```php
Carbon::now()->addDays(5)->toDateString()
```

واتە ڕێکەوتی ئێستا وەربگرە، پێنج ڕۆژی بۆ زیاد بکە، پاشان تەنها بەشی ڕێکەوتەکە وەربگرە.

```php
Carbon::now()->subDays(3)->toDateString()
```

واتە سێ ڕۆژ پێش ئێستا. `Carbon` ئامرازێکە بۆ ئاسانکردنی کار لەگەڵ ڕێکەوت و کات.

**بۆچی Seeder دەتوانێت ڕێکەوتی کۆن زیاد بکات، بەڵام POST نا؟** چونکە Seeder ڕاستەوخۆ `Assignment::create()` بەکاردەهێنێت و بە `StoreAssignmentRequest` ـدا تێناپەڕێت. یاسای «ئەمڕۆ یان داهاتوو» لە Form Request ـە، نەک لە خودی Model.

دووبارەکردنەوەی `php artisan db:seed` لەم پڕۆژەیەدا چوار ئەرکی تری نموونە زیاد دەکات؛ تۆمارەکانی پێشوو جێگرەوە ناکات.

### ١١.٣. Factory؛ داتای ساختە بۆ تاقیکردنەوە

فایل: [AssignmentFactory.php](database/factories/AssignmentFactory.php).

```php
'title' => fake()->sentence(4),
'course_code' => fake()->randomElement(['CS302', 'DB201', 'SE310', 'NET102']),
'due_date' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
```

`fake()` داتای ساختە دروست دەکات. بۆ تاقیکردنەوە پێویست ناکات هەر جارێک بە دەست ناو و وەسف بنووسیت.

```php
Assignment::factory()->create(['status' => 'pending']);
```

ئەرکێک دروست دەکات و دۆخەکەی بە دیاریکراوی دەکاتە `pending`. بەهای دیاریکراوی ناو `create()` لێرە جێگەی بەهای ساختەی ئەو خانەیە دەگرێتەوە.

مێثۆدی `graded()` ـیش هەیە:

```php
Assignment::factory()->graded(90)->create();
```

ئەمە ئەرکێک بە `status = graded` و `grade = 90` دروست دەکات. ئەگەر نمرەی پێ نەدرێت، نمرەیەکی ساختە لە `70` تا `100` هەڵدەبژێرێت.

<a id="frontend"></a>

## ١٢. ڕووکار و JavaScript؛ بەکارهێنەر چۆن لەگەڵ API کار دەکات؟

فایل: [resources/views/welcome.blade.php](resources/views/welcome.blade.php).

ئەم فایلە هەردوو بەشی HTML و JavaScript ـی سەرەکیی پڕۆژەکەی تێدایە. فایلەکە `.blade.php` ـە چونکە Blade ـی Laravel بەکاردەهێنێت.

لە `routes/web.php`:

```php
Route::get('/', function () {
    return view('welcome');
});
```

واتە کاتێک ناونیشانی سەرەکی دەکەیتەوە، Laravel ئەم پەڕەیە دەگەڕێنێتەوە. پاشان JavaScript لە وێبگەڕدا داتای ئەرکەکان لە API دەهێنێت.

### بەشەکانی پەڕە

| بەش | چی پیشان دەدات؟ |
| --- | --- |
| Header | ناوی پڕۆژە، دوگمەی زیادکردن و لینکی JSON |
| Stats | ژمارەی هەموو ئەرکەکان، چاوەڕوان، لە کاردا و نمرەدراو |
| Filter | هەڵبژاردنی دۆخی ئەرکەکان |
| Assignments Grid | کارتی هەر ئەرکێک |
| Loading | نیشاندانی چاوەڕوانی لە کاتی هێنانی داتا |
| Empty State | پەیامی نەبوونی ئەنجام |
| Load Error | پەیامی هەڵە و دوگمەی دووبارە هەوڵدان |
| Modal | پەنجەرەی فۆرمی زیادکردنی ئەرک |

### HTML و Tailwind بە سادەیی

```html
<input type="text" id="title" required maxlength="255">
```

- `input`: شوێنی نووسینی بەکارهێنەرە.
- `id="title"`: ناسنامەی توخمەکەیە؛ JavaScript بەم ID ـە دەیدۆزێتەوە.
- `required`: وێبگەڕ داوا دەکات بەتاڵ نەبێت.
- `maxlength="255"`: سنووری درێژی لە ڕووکاردا دادەنێت.

پشکنینی ڕووکار یارمەتی بەکارهێنەر دەدات؛ بەڵام دەتوانرێت بە Postman تێپەڕێندرێت. بۆیە Validation ـی Backend هەر پێویستە.

کلاسەکانی وەک `bg-slate-900`، `rounded-lg` و `p-5` بۆ ڕەنگ، گۆشەی خڕ و بۆشایی ناوخۆیین. `hidden` توخمەکە دەشارێتەوە. `md:grid-cols-2` واتە لە قەبارەی ناوەندی شاشە و سەرەوە، کارتەکان لە دوو ستووندا ڕیز بکە.

SVG ـەکانی فایلەکە وێنۆچکەی دوگمە و پەڕەکانن؛ بەشی کارکردنی داتابەیس نین.

### گۆڕاوە سەرەکییەکان

```javascript
let currentFilter = '';
let allAssignments = [];
let latestRequest = 0;
let modalTrigger = null;
```

| گۆڕاو | کاری چییە؟ |
| --- | --- |
| `currentFilter` | دۆخی هەڵبژێردراوی فلتەر هەڵدەگرێت؛ `''` واتە هەموو |
| `allAssignments` | کۆپیی داتای هێنراو لە API لە بیرگەی وێبگەڕدا هەڵدەگرێت |
| `latestRequest` | ژمارەی داواکاریی دواهەم هەڵدەگرێت |
| `modalTrigger` | ئەو توخمە هەڵدەگرێت کە پێش کردنەوەی Modal هەڵبژێردراو بوو |

`allAssignments` داتابەیس نییە. ئەگەر پەڕەکە داخەیت، ئەو گۆڕاوە لە بیرگە دەچێت؛ داتای پاشەکەوتکراوی داتابەیس دەمێنێتەوە.

### ١٢.١. `fetchAssignments()`؛ هێنانی داتا

بەشی سەرەکیی کارەکە:

```javascript
const response = await fetch('/api/assignments', {
    headers: { 'Accept': 'application/json' }
});
if (!response.ok) throw new Error('Could not load assignments.');
const result = await response.json();
allAssignments = result.data;
renderAssignments();
updateStats();
```

ئەم پارچەیە بۆ تێگەیشتن کورت کراوەتەوە؛ فایلی سەرەکی پشکنینی ژمارەی داواکاری و بەڕێوەبردنی هەڵەشی هەیە.

1. `fetch()` داواکاری بۆ API دەنێرێت؛ ئەگەر method دیاری نەکرێت، `GET` ـە.
2. `Accept` دەڵێت وەڵامی JSON دەوێت.
3. `await` چاوەڕوانی ئەنجامی داواکاری دەکات لە ناو مێثۆدی `async`؛ پەڕەکە بەو هۆیە ناوەستێت.
4. `response.ok` دەپشکنێت وەڵامەکە کۆدی سەرکەوتووی `2xx` هەیە یان نا.
5. `response.json()` دەقی JSON دەگۆڕێت بۆ داتای JavaScript.
6. `result.data` لیستی ئەرکەکانە.
7. `renderAssignments()` کارتەکان نوێ دەکاتەوە.
8. `updateStats()` ژمارەکان نوێ دەکاتەوە.

**بۆچی `response.ok` دەپشکنین؟** `fetch()` بۆ وەڵامی HTTP ـی وەک `404` یان `422` خۆی بە تەنها ناچێتە `catch`. بۆیە دەبێت کۆدی وەڵام یان `ok` بپشکنین.

### `latestRequest` بۆچی هەیە؟

```javascript
const requestNumber = ++latestRequest;
// ... after receiving the response
if (requestNumber !== latestRequest) return;
```

وای دابنێ دوو داواکاری بەدوای یەکدا نێردران و دووەم زووتر وەڵامی هاتەوە. نابێت وەڵامی کۆنی یەکەم بێت و داتای نوێ بگۆڕێت. ژمارەکە وای دەکات تەنها وەڵامی دوا داواکاری وەرگیرێت. داواکاریی کۆن هەڵناوەشێنێتەوە؛ ئەنجامەکەی پشتگوێ دەخات.

### ١٢.٢. `updateStats()`؛ ژماردن

```javascript
allAssignments.filter(a => a.status === 'pending').length
```

`filter()` تەنها ئەرکەکانی `pending` هەڵدەبژێرێت؛ `length` ژمارەیان دەداتەوە. بەم شێوەیە ژمارەکانی سەرەوەی پەڕە دروست دەبن.

ئەو ژمارانە لەسەر **هەموو داتای هێنراو** هەژمار دەکرێن، تەنانەت ئەگەر لە کارتەکاندا فلتەرێکت هەڵبژاردبێت. `submitted` فلتەری هەیە، بەڵام کارتی ژمارەی سەربەخۆی لە بەشی Stats نییە.

### ١٢.٣. `renderAssignments()`؛ دروستکردنی کارتەکان

ئەم مێثۆدە:

1. کارتە کۆنەکان پاک دەکاتەوە.
2. بە پێی `currentFilter` داتای پیشاندراو هەڵدەبژێرێت.
3. ئەگەر هیچ نەبوو، پەیامی `No assignments found` پیشان دەدات.
4. بۆ هەر ئەرکێک بە `document.createElement('div')` کارت دروست دەکات.
5. بە پێی `status` و `priority` ڕەنگ دیاری دەکات.
6. ناو، وەسف، ڕێکەوت و دوگمەکان دەخاتە کارت.
7. کارت بە `appendChild()` زیاد دەکاتە لیست.

ئەم مەرجە گرنگە:

```javascript
item.grade !== null
```

دەڵێت ئەگەر نمرە دیاری کرابوو، پیشانی بدە. ئەگەر نمرە `0` بێت، هێشتا پیشان دەدرێت؛ چونکە `0` بە `null` یەکسان نییە.

### ١٢.٤. `setFilter()`؛ فلتەری ڕووکار

```javascript
currentFilter = status;
renderAssignments();
```

ئەمە بیرۆکەی سەرەکیی مێثۆدەکەیە؛ لە فایلەکەدا ڕەنگی دوگمەی چالاکیش دەگۆڕدرێت و دۆخی هەڵە دەپشکنرێت.

**جیاوازییەکی زۆر گرنگ:** دوگمەکانی فلتەری ڕووکار هەموو جارێک داواکاریی نوێ بۆ API نانێرن. ئەوان لە ناو `allAssignments` بە JavaScript فلتەر دەکەن.

بەڵام لە Postman ئەگەر ئەمە بنێریت:

```text
GET /api/assignments?status=pending
```

ئەوا `index()` لە Backend بە `where()` لە داتابەیسدا فلتەر دەکات. هەردوو تواناکە هەن، بەڵام دوگمەکانی ئەم ڕووکارە یەکەمیان بەکاردەهێنن.

### ١٢.٥. `handleCreate()`؛ ناردنی فۆرم

```javascript
e.preventDefault();
```

ڕێگە لە ناردنی ئاساییی فۆرم و بارکردنەوەی تەواوی پەڕە دەگرێت. لەبری ئەوە JavaScript داتا دەنێرێت.

```javascript
const payload = {
    title: document.getElementById('title').value,
    course_code: document.getElementById('course_code').value,
    due_date: document.getElementById('due_date').value,
    priority: document.getElementById('priority').value,
    status: document.getElementById('status').value,
    description: document.getElementById('description').value || null
};
```

`payload` داتای نێردراوە. `value` بەهای نووسراوی فۆرم وەردەگرێت. بۆ وەسفی بەتاڵ، `null` نێردرێت.

```javascript
const res = await fetch('/api/assignments', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    },
    body: JSON.stringify(payload)
});
```

- `POST`: داوای دروستکردنی ئەرکێکی نوێ.
- `Content-Type`: داتای نێردراو JSON ـە.
- `Accept`: وەڵامی JSON دەوێت.
- `JSON.stringify()`: ئۆبجێکتی JavaScript دەکاتە دەقی JSON بۆ ناردن.

ئەگەر سەرکەوتوو بوو، Modal دادەخرێت، فۆرم پاک دەکرێتەوە و لیست دووبارە لە API دەهێنرێت. ئەگەر Validation هەڵەی هەبوو، پەیامەکانی `errors` لە فۆرمدا پیشان دەدرێن.

لە کاتی ناردندا دوگمەکە ناچالاک دەکرێت بۆ کەمکردنەوەی دووبارە کلیککردن. لە `finally` دووبارە چالاک دەکرێتەوە.

### ١٢.٦. `updateStatus()`؛ گۆڕینی دۆخ و نمرە

کاتێک دۆخی ئەرکەکە لە لیستەکە دەگۆڕیت:

1. دۆخی پێشوو هەڵدەگیرێت.
2. ئەگەر دۆخی نوێ `graded` بێت، `prompt()` داوای نمرە دەکات.
3. ئەگەر Cancel بکەیت، هیچ PATCH ـێک نانێردرێت و هەڵبژاردنەکە دەگەڕێتەوە بۆ دۆخی پێشوو.
4. نمرە دەبێت بەتاڵ نەبێت و ژمارەیەکی تەواو لە `0` تا `100` بێت.
5. داواکاریی `PATCH` دەنێردرێت.

```javascript
body: JSON.stringify({ status: newStatus, grade: grade })
```

ئەگەر دۆخی نوێ `graded` نەبێت، `grade` لە کۆدی ڕووکاردا `null` ـە؛ بۆیە ئەم ڕووکارە لە گۆڕینی ئەرکی نمرەدراو بۆ دۆخێکی تر نمرەکە پاک دەکاتەوە.

**ئەمە ڕەفتاری ڕووکارە.** API خۆی یاسای پەیوەستکردنی نمرە و دۆخی نییە. ئەگەر بە Postman تەنها `status` بنێریت، نمرەی پێشوو بە خۆکار پاک نابێتەوە.

### ١٢.٧. `deleteAssignment()`؛ سڕینەوە

سەرەتا `confirm()` داوای دڵنیابوونەوە دەکات. ئەگەر بەکارهێنەر ڕازی بوو، `DELETE /api/assignments/{id}` دەنێردرێت. دوای سەرکەوتن لیست نوێ دەکرێتەوە.

چونکە وەڵامی سڕینەوە `204` و بەتاڵە، کۆدەکە هەوڵی خوێندنەوەی JSON لەو وەڵامە نادات.

### ١٢.٨. `openModal()` و `closeModal()`

ئەم دوو مێثۆدە بە زیادکردن یان لابردنی کلاسی `hidden` پەنجەرەی فۆرم پیشان دەدەن یان دەیخەن.

- لە کردنەوەدا شوێنی هەڵبژاردنی ئێستا هەڵدەگیرێت و فوکەس دەچێتە خانەی ناو.
- لە داخستندا فوکەس دەگەڕێتەوە بۆ ئەو توخمەی پێشوو.
- کلیلی `Escape` پەنجەرەکە دادەخات.
- `Tab` و `Shift+Tab` ڕێک خراون بۆ جووڵان لە نێو کۆنترۆڵەکانی Modal.

ئەمە بەکارهێنانی فۆرم بە کیبۆرد ئاسانتر دەکات.

### ١٢.٩. `escapeHtml()`؛ پیشاندانی داتا وەک دەق

```javascript
function escapeHtml(value) {
    const element = document.createElement('span');
    element.textContent = value ?? '';
    return element.innerHTML;
}
```

چونکە کارتەکان بە `innerHTML` دروست دەکرێن، نابێت دەقی بەکارهێنەر ڕاستەوخۆ وەک HTML لێک بدرێتەوە. ئەم مێثۆدە دەقەکە لە `textContent` دادەنێت و شێوەی پارێزراوی بۆ دانان لە ناو HTML دەگەڕێنێتەوە.

بۆ نموونە، ئەگەر ناوی ئەرک `<b>Lab</b>` بێت، دەبێت وەک دەق پیشان بدرێت، نەک کۆدی HTML ـی بەکارهێنەر جێبەجێ بکرێت. ئەمە بەشێکە لە ڕێگرتن لە XSS لە شوێنی پیشاندانی ئەم دەقانە.

### ١٢.١٠. `@json()`؛ پەیوەندیی Blade و JavaScript

```javascript
document.getElementById('due_date').min = @json(now()->toDateString());
```

کاتێک Laravel پەڕەکە ئامادە دەکات، `now()->toDateString()` ڕێکەوتی ئەمڕۆی ئەپ دەداتەوە و `@json()` دەیکاتە بەهای گونجاو بۆ JavaScript. بەمە خانەی ڕێکەوت لە ڕووکار سنووری کەمترین ڕێکەوتی هەیە.

خودی وێبگەڕ PHP جێبەجێ ناکات؛ ئەم بەشە لە سێرڤەر ئامادە دەکرێت پێش گەیشتنە وێبگەڕ.

### بۆچی NPM بۆ ئەم ڕووکارە پێویست نییە؟

فایلی `welcome.blade.php`، Tailwind لە CDN و فۆنت لە Google Fonts دەهێنێت و JavaScript ـەکەی لە ناو خۆیدایە. لەم پەڕەیەدا `@vite` بەکار نەهاتووە.

بۆیە بۆ کارکردنی ئەم داشبۆرد و API ـە پێویست بە `npm run build` نییە، هەرچەند فایلەکانی Vite و NPM لە پڕۆژەکە هەن. جوانکاریی CDN و فۆنتە دەرەکییەکان پێویستیان بە ئینتەرنێت هەیە.

<a id="syntax"></a>

## ١٣. هێما و ڕستەکان؛ ئەگەر مامۆستا ئاماژەی بە هێڵێک کرد

| کۆد | مانای سادە |
| --- | --- |
| `$assignment` | گۆڕاوێک لە PHP |
| `class` | پێناسەی جۆرێکی ئۆبجێکت؛ وەک `Assignment` |
| `extends` | کلاسەکە توانای کلاسێکی تر وەردەگرێت |
| `namespace` | ناونیشانی کلاسەکە لە پێکهاتەی کۆددا |
| `use App\Models\Assignment;` | دەڵێت کام کلاس بە ناوی کورت بەکار دەهێنیت |
| `use HasFactory;` لە ناو کلاس | زیادکردنی توانای Trait بۆ کلاس |
| `public function` | مێثۆدێک کە لە دەرەوەی کلاس بانگ دەکرێت |
| `protected` | بۆ ناو کلاس و کلاسە وەرگیراوەکانە |
| `: array` یان `: bool` | جۆری بەهای گەڕاوەی مێثۆد دیاری دەکات |
| `: void` | مێثۆدەکە بەهایەک ناگەڕێنێتەوە |
| `Assignment $assignment` | گۆڕاوەکە دەبێت ئۆبجێکتێکی ئەم جۆرە بێت |
| `new AssignmentResource(...)` | ئۆبجێکتێکی نوێ دروست دەکات |
| `->` | دەستگەیشتن بە مێثۆد یان تایبەتمەندیی ئۆبجێکت |
| `Assignment::query()` | بانگکردنی API ـی Model لە ڕێگای ناوی کلاسەوە |
| `=>` لە array ـی PHP | کلیلی خانە بە بەهاکەی دەبەستێتەوە |
| `return` | ئەنجام دەگەڕێنێتەوە و لەو شوێنە مێثۆدەکە کۆتایی دێت |
| `??` | ئەگەر بەهای چەپ `null` بوو، بەهای ڕاست بەکار بهێنە |
| `?->` | تەنها ئەگەر ئۆبجێکتەکە `null` نەبوو، مێثۆدەکە بانگ بکە |
| `const` لە JavaScript | گۆڕاوێک کە ناتوانیت خۆی بە بەهایەکی نوێ جێگرەوە بکەیت |
| `let` لە JavaScript | گۆڕاوێک کە دەتوانیت بەهاکەی نوێ بکەیتەوە |
| `===` لە JavaScript | یەکسانی بەها و جۆر پێکەوە دەپشکنێت |
| `a => a.status === 'pending'` | فەنکشنێکی کورتی JavaScript بۆ پشکنینی دۆخ |
| `condition ? a : b` | ئەگەر مەرجەکە ڕاست بوو `a`، ئەگەر نا `b` |

### `try`، `catch` و `finally`

```javascript
try {
    // کارەکە هەوڵ بدە
} catch (error) {
    // ئەگەر هەڵە ڕوویدا، مامەڵەی لەگەڵ بکە
} finally {
    // دوای هەوڵەکە، لە هەردوو دۆخی سەرکەوتن و هەڵەدا جێبەجێ دەبێت
}
```

لە فۆرمی زیادکردندا `finally` دوگمەی ناردن چالاک دەکاتەوە؛ بۆ ئەوەی دوای هەڵەش بەکارهێنەر بتوانێت دووبارە هەوڵ بدات.

### Method Chaining

```php
$query->orderBy('due_date')->orderBy('id')->get();
```

چەند مێثۆد بەدوای یەکدا بانگ دەکرێن: یەکەم ڕیزبەندیی ڕێکەوت، پاشان ID، لە کۆتاییدا هێنانی ئەنجام. بەشی `get()` ئەوەیە کە ئەنجامی پرسیارەکە دەهێنێت.

<a id="tests"></a>

## ١٤. کۆدەکانی HTTP و تاقیکردنەوەکان

### کۆدە گرنگەکانی وەڵام

| کۆد | مانا | نموونە لەم پڕۆژەیە |
| --- | --- | --- |
| `200` | کارەکە سەرکەوتوو بووە | GET و PATCH ـی سەرکەوتوو |
| `201` | تۆمارێکی نوێ دروست کرا | POST ـی سەرکەوتوو |
| `204` | کارەکە سەرکەوتوو بووە؛ وەڵام بەتاڵە | DELETE ـی سەرکەوتوو |
| `404` | ڕێگا یان تۆمار نەدۆزرایەوە | ID ـی نەبوو یان ID ـی ناژمارەیی |
| `405` | ئەم جۆرە داواکارییە بۆ ئەم ڕێگایە ڕێگەپێنەدراوە | PUT بۆ `/api/assignments/5` |
| `422` | داتای نێردراو لەگەڵ یاساکان ناگونجێت | ناوی بەتاڵ، نمرەی `101` یان دۆخی نەناسراو |

`PUT` لە ئەم پڕۆژەیە تۆمار نەکراوە. بۆ نوێکردنەوە `PATCH` بەکار بهێنە. بە گشتی PATCH بۆ گۆڕینی بەشێکە و PUT بۆ جێگرەوەکردنی سەرچاوە بەکاردێت؛ لێرە جێبەجێکردنی PUT نییە.

### نموونەی وەڵامی Validation

وەڵامێکی نموونەیی و کورتکراو:

```json
{
  "message": "The title field is required.",
  "errors": {
    "title": ["The title field is required."]
  }
}
```

دەقی وردی پەیامەکە دەتوانێت بگۆڕێت. خاڵی گرنگ ئەوەیە `errors` هەیە و کۆدی وەڵام `422` ـە.

لە `bootstrap/app.php` ئەم بیرۆکەیە هەیە:

```php
$request->is('api/*') || $request->expectsJson()
```

ئەگەر داواکاری بۆ ڕێگای `api/*` بوو یان چاوەڕوانی JSON بوو، هەڵەکان بە شێوەی JSON دەگەڕێنرێنەوە. بەمە API لەبری پەڕەی هەڵەی HTML وەڵامی گونجاو بۆ Client دەدات.

### تاقیکردنەوەکان چی دەپشکنن؟

لە [AssignmentApiTest.php](tests/Feature/AssignmentApiTest.php)، ١٥ مێثۆدی تاقیکردنەوە هەیە. ئەوان ئەم ڕەفتارانە دەپشکنن:

- هێنانی لیست بە ڕیزبەندیی ڕێکەوت و گەورەکردنی پیتی کۆدی وانە لە وەڵام.
- فلتەرکردن بە دۆخ و ڕەتکردنەوەی فلتەری نادروست.
- زیادکردنی ئەرک و بوونی داتا لە داتابەیس.
- گەڕاندنەوەی default ـەکانی `medium` و `pending` لە وەڵامی زیادکردن.
- ڕەتکردنەوەی `null` بۆ گرنگی و دۆخ، بەبێ پاشەکەوتکردنی تۆمار.
- سنووری درێژیی وەسف لە زیادکردن و نوێکردنەوە.
- دەستکارینەکردنی تۆمار ئەگەر داتای نوێکردنەوە هەڵە بێت.
- نەبوونی تۆمار، ID ـی نادروست و ڕێگەپێنەدراوی PUT.
- خانە پێویستەکان، ڕێکەوتی ڕابردوو و بەها نادروستەکان.
- پیشاندانی یەک ئەرک و وەڵامی `404` بۆ ئەرکی نەبوو.
- PATCH بۆ دۆخ و نمرە، و سڕینەوە بە `204`.

دوو تاقیکردنەوەی بنەڕەتیی تریش هەن: یەکێک بۆ وەڵامی پەڕەی `/` و یەکێک بۆ نموونەی سادەی Unit Test. کۆی گشتی ١٧ تاقیکردنەوەیە.

### یەک تاقیکردنەوە چۆن بخوێنمەوە؟

```php
$assignment = Assignment::factory()->create(['status' => 'pending']);

$this->patchJson('/api/assignments/'.$assignment->id, [
    'status' => 'graded',
    'grade' => 92,
])->assertOk()
  ->assertJsonPath('data.grade', 92);

$this->assertDatabaseHas('assignments', [
    'id' => $assignment->id,
    'grade' => 92,
]);
```

ئەمە نموونەیەکی کورتکراوی شێوازی تاقیکردنەوەی پڕۆژەکەیە:

1. **ئامادەکردن:** بە Factory ئەرکێک دروست دەکەین.
2. **کردار:** داواکاریی PATCH دەنێرین.
3. **پشکنین:** دڵنیا دەبینەوە وەڵام `200` ـە، JSON نمرەی `92` ـی تێدایە و داتابەیس نوێ بووەتەوە.

`assertJsonPath()` داتای وەڵام دەپشکنێت؛ `assertDatabaseHas()` دڵنیا دەکات داتاکە بەڕاستی پاشەکەوت کراوە.

### `RefreshDatabase` چییە؟

```php
use RefreshDatabase;
```

یارمەتی دەدات تاقیکردنەوەکان بە داتابەیسێکی پاک و جیاکراوە کار بکەن، بۆ ئەوەی داتای تاقیکردنەوەیەک کاریگەری لەسەر یەکێکی تر نەبێت.

لە `phpunit.xml`، `DB_CONNECTION=sqlite` و `DB_DATABASE=:memory:` دیاری کراون. `:memory:` واتە داتابەیسی کاتی لە RAM، بۆ تاقیکردنەوە؛ داتای ئاساییی ئەپ نییە.

تاقیکردنەوەی GET بۆ `/` تەنها سەرکەوتوویی وەڵامی پەڕە دەپشکنێت؛ کارکردنی دوگمە و JavaScript لە وێبگەڕدا بە خۆکار ناپشکنێت.

<a id="demo"></a>

## ١٥. کارپێکردن و پیشاندانی پڕۆژەکە

### ئەگەر پڕۆژەکە پێشتر ئامادە کراوە

لە Terminal ـی ناو فۆڵدەری پڕۆژە:

```sh
php artisan serve
```

پاشان ناونیشانی پیشاندراوی Terminal بکەرەوە؛ بە ئاسایی:

```text
http://127.0.0.1:8000
```

`php artisan serve` سێرڤەری گەشەپێدانی ناوخۆیی دەست پێ دەکات. `Ctrl+C` لە Terminal دەیوەستێنێت.

بۆ پیشاندانی ڕێگاکانی API:

```sh
php artisan route:list --path=api
```

بۆ تاقیکردنەوەکان:

```sh
php artisan test
```

### ئەگەر لە کۆمپیوتەرێکی نوێ دامەزرێنیت

بەپێی [README ـی پڕۆژە](README.md)، PHP ـی گونجاو، Composer و SQLite extension پێویستن. فەرمانەکان یەک بە یەک لە فۆڵدەری پڕۆژە جێبەجێ بکە:

```sh
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan migrate
php artisan db:seed
php artisan serve
```

| فەرمان | چی دەکات؟ |
| --- | --- |
| `composer install` | پەکەجەکانی PHP بە وەشانەکانی lock دامەزرێنێت |
| کۆپیکردنی `.env.example` | تەنها ئەگەر `.env` نەبێت، فایلی ڕێکخستن دروست دەکات |
| `key:generate` | کلیلی ئەپ دروست دەکات؛ بۆ ئامادەکردنی سەرەتایییە |
| دروستکردنی `database.sqlite` | ئەگەر فایلەکە نەبێت، فایلی SQLite دروست دەکات |
| `migrate` | خشتەکان دروست دەکات |
| `db:seed` | چوار ئەرکی نموونە زیاد دەکات |
| `serve` | ئەپ لە کۆمپیوتەرەکەت کار پێ دەکات |

ئەگەر `.env` ـەکەت MySQL بەکار دەهێنێت، پێویستە هەمان داتابەیس ڕێک بخەیت و کار پێ بکەیت. بۆ هەر جار پیشاندانی پڕۆژە، پێویست ناکات `key:generate`، `migrate` و `db:seed` دووبارە بکەیتەوە.

### پیشاندانێکی سادەی ٥ تا ٧ خولەکی بە Postman

فایلی [Campus_Assignment_Tracker_API.postman_collection.json](Campus_Assignment_Tracker_API.postman_collection.json) لە Postman، Import بکە.

`base_url` لە Collection ـەکەدا `http://127.0.0.1:8000` ـە. ئەگەر سێرڤەرەکەت پۆرتێکی تری هەبوو، ئەو بەهایە بگۆڕە.

**هەنگاوی ١: هەموو ئەرکەکان پیشان بدە.**

```http
GET /api/assignments
Accept: application/json
```

بڵێ: «ئەمە لیستی ئەرکەکانە و بە ڕێکەوتی تەسلیمکردن ڕیز کراوە.» چاوەڕوانی `200` بە.

**هەنگاوی ٢: ئەرکێک زیاد بکە.**

لە Postman: `POST` هەڵبژێرە، لە `Body`، `raw` و `JSON` هەڵبژێرە.

```http
POST /api/assignments
Content-Type: application/json
Accept: application/json
```

```json
{
  "title": "Database Lab",
  "course_code": "db201",
  "due_date": "2026-11-20"
}
```

ڕێکەوتەکە نموونەیە؛ لە ڕۆژی پیشانداندا ڕێکەوتی ئەمڕۆ یان داهاتوو بەکار بهێنە. داواکاریی زیادکردنی ناو Collection ـەکە خۆی ڕێکەوتی حەوت ڕۆژ دواتر ئامادە دەکات.

چاوەڕوانی `201` بە. ئەوە پیشان بدە کە `priority=medium` و `status=pending` گەڕاونەتەوە، هەرچەند نەتناردوون. هەروەها `db201` لە وەڵامدا بووەتە `DB201`.

**هەنگاوی ٣: ID ـی تۆمارە نوێکە وەربگرە.**

لە `data.id`، ID وەربگرە. لە نموونەکانی دواتردا `5` تەنها نموونەیە؛ ID ـی ڕاستەقینەی خۆت بەکار بهێنە.

Collection ـەکە ئەگەر زیادکردنەکە `201` بوو، خۆی `assignment_id` پاشەکەوت دەکات:

```javascript
pm.collectionVariables.set('assignment_id', pm.response.json().data.id);
```

بۆیە داواکاریی دروستکردن پێش Show، Update و Delete جێبەجێ بکە.

**هەنگاوی ٤: تەنها هەمان ئەرک پیشان بدە.**

```http
GET /api/assignments/5
```

بڵێ: «لێرە Route Model Binding بە ID تۆمارەکە دەدۆزێتەوە.»

**هەنگاوی ٥: بە PATCH نمرە و دۆخ بگۆڕە.**

```http
PATCH /api/assignments/5
Content-Type: application/json
Accept: application/json
```

```json
{
  "status": "graded",
  "grade": 92
}
```

بڵێ: «تەنها ئەو دوو خانەیەم ناردووە؛ بۆیە تەنها ئەوان دەگۆڕدرێن.» چاوەڕوانی `200` بە.

**هەنگاوی ٦: فلتەر پیشان بدە.**

```http
GET /api/assignments?status=graded
```

بڵێ: «ئەمە فلتەری Backend ـە؛ مەرجی `where` لە پرسیاری داتابەیس زیاد دەکرێت.»

**هەنگاوی ٧: بە هەڵەیەکی مەبەستدار Validation پیشان بدە.**

هەمان PATCH بە نمرەی `101` بنێرە:

```json
{
  "grade": 101
}
```

چاوەڕوانی `422` بە. دووبارە GET بکە و پیشان بدە نمرەی پێشوو `92` دەمێنێتەوە؛ داتای هەڵە پاشەکەوت نەکراوە.

**هەنگاوی ٨: ئەرکە تاقیکردنەوەییەکە بسڕەوە و دووبارە بگەڕێ.**

```http
DELETE /api/assignments/5
```

وەڵام `204` و بەتاڵە. پاشان:

```http
GET /api/assignments/5
```

وەڵام `404` ـە؛ چونکە تۆمارەکە سڕاوەتەوە.

### پیشاندانی ڕووکار

دوای Postman، پەڕەی سەرەکی بکەرەوە و ئەمانە پیشان بدە:

1. کارتەکان و ژمارەکانی سەرەوە.
2. فلتەرکردن بە دوگمەکان.
3. زیادکردن بە Modal.
4. گۆڕینی دۆخ بۆ `graded` و نمرەدان.
5. سڕینەوەی ئەرکێکی تاقیکردنەوەیی.

ئەگەر مامۆستا پرسی «داواکارییەکان لە کوێ دەبینم؟»، لە وێبگەڕ `F12` بکە، بەشی `Network` و پاشان `Fetch/XHR` ببینە. داواکارییەکان و کۆدی وەڵامەکان لەوێ دەردەکەون.

<a id="questions"></a>

## ١٦. پرسیارە ئەگەرییەکانی مامۆستا و وەڵامی ئاسان

ئەم وەڵامانە بە زمانی خۆت بڵێوە. پێویست ناکات وشە بە وشە لەبەریان بکەیت؛ هەوڵ بدە کۆدی پەیوەندیدار پیشان بدەیت.

### پرسیارە بنەڕەتییەکان

**١. پڕۆژەکەت چی دەکات؟**

سیستەمێکە بۆ تۆمارکردن و بەدواداچوونی ئەرکەکانی خوێندکار. دەتوانم ئەرک زیاد بکەم، بیبینم، دەستکاری بکەم و بیسڕمەوە.

**٢. بۆچی Laravel ـت بەکارهێناوە؟**

Laravel ئامرازی ئامادەی بۆ Route، Validation، کارکردن لەگەڵ داتابەیس و JSON هەیە. بەمە کۆدەکە ڕێکخراوترە و پێویست ناکات هەموو شتێک لە سفرەوە بنووسم.

**٣. CRUD چییە و لە کوێی پڕۆژەکەتدایە؟**

Create لە `store`، Read لە `index` و `show`، Update لە `update`، Delete لە `destroy` جێبەجێ کراوە.

**٤. API چییە؟**

ڕێگایەکە بۆ ئەوەی Client داواکاری بنێرێت و لەگەڵ داتای سیستەم کار بکات. لێرە ڕووکار و Postman هەردووکیان هەمان API بەکاردەهێنن.

**٥. ئەم API ـە بۆچی RESTful پێی دەوترێت؟**

چونکە سەرچاوەی ئەرکەکان بە ناونیشانی `assignments` دیاری دەکات و بەپێی جۆری کارەکە method ـەکانی HTTP وەک GET، POST، PATCH و DELETE بەکاردەهێنێت. ئەمە نموونەیەکی سادەی ئەو شێوازەیە.

**٦. MVC لەم پڕۆژەیەدا چییە؟**

Model بریتییە لە `Assignment`، View پەڕەی `welcome.blade.php` ـە، Controller ـیش `AssignmentController` ـە. لە بەشی API، Resource شێوەی داتای وەڵام ڕێک دەخات؛ JavaScript ـی View داتا لە API وەردەگرێت.

**٧. Route چی دەکات؟**

داواکاری بە پێی ناونیشان و HTTP method دەگەیەنێتە مێثۆدی گونجاوی Controller. بۆ نموونە POST بۆ `/api/assignments` دەچێتە `store()`.

**٨. بۆچی پێنج Route هەیە، بەڵام CRUD چوار کارە؟**

چونکە Read دوو شێوەی هەیە: لیستی هەموو ئەرکەکان لە `index` و یەک ئەرک لە `show`.

**٩. جیاوازی GET و POST چییە؟**

GET بۆ خوێندنەوەی داتایە. POST لەم پڕۆژەیەدا بۆ دروستکردنی ئەرکێکی نوێیە.

**١٠. جیاوازی PATCH و PUT چییە؟**

PATCH بۆ گۆڕینی بەشێکی داتایە؛ بە گشتی PUT بۆ جێگرەوەکردنی سەرچاوەیە. لەم پڕۆژەیە تەنها PATCH تۆمار کراوە و PUT وەڵامی `405` دەدات.

### پرسیارەکانی Model و داتابەیس

**١١. Model چۆن دەزانێت کام خشتە بەکار بهێنێت؟**

Laravel بە یاسای ناونان، ناوی تاکی `Assignment` بە خشتەی کۆی `assignments` دەبەستێتەوە. بۆیە لەم Model ـەدا پێویست نەبووە ناوی خشتە بە دەست دیاری بکەم.

**١٢. Eloquent چییە؟**

ORM ـی Laravel ـە؛ یارمەتی دەدات بە کلاس و مێثۆدی PHP کار لەگەڵ داتابەیس بکەم. بۆ نموونە `Assignment::create()` تۆمارێک زیاد دەکات.

**١٣. `$fillable` بۆچی هەیە؟**

دیاری دەکات کام خانەکان بە Mass Assignment پڕ بکرێنەوە. ئەمە هەڵبژاردنی خانەکانە؛ سنووری نمرە یان درێژیی ناو ناپشکنێت.

**١٤. Migration و Model چ جیاوازییەکیان هەیە؟**

Migration پێکهاتەی خشتەکە دروست دەکات. Model دوای دروستبوونی خشتەکە لەگەڵ تۆمارەکان کار دەکات.

**١٥. Seeder و Factory چ جیاوازییەکیان هەیە؟**

Seeder ـی پڕۆژەکەم چوار ئەرکی دیاریکراوی نموونە زیاد دەکات. Factory داتای ساختە دروست دەکات، بە تایبەتی بۆ تاقیکردنەوە.

**١٦. `casts()` بۆچی هەیە؟**

بۆ ئەوەی `due_date` وەک ڕێکەوت و `grade` وەک ژمارەی تەواو بەکار بهێنرێن. ئەمە جۆری بەکاربردنی داتا لە Model ڕێک دەخات؛ جێگەی Validation ناگرێتەوە.

**١٧. `null` و `0` بۆ نمرە چ جیاوازییەکیان هەیە؟**

`null` واتە نمرە دانەنراوە. `0` واتە نمرەکە دیاری کراوە و سفرە. لە ڕووکاردا هەردووکیان جیاواز مامەڵەیان لەگەڵ دەکرێت.

**١٨. `created_at` و `updated_at` لە کوێوە هاتوون؟**

`$table->timestamps()` لە Migration ئەو خانانە زیاد دەکات و Eloquent بە ئاسایی کاتەکانیان بەڕێوە دەبات. Resource لێرە تەنها `created_at` دەگەڕێنێتەوە.

### پرسیارەکانی Validation و Controller

**١٩. بۆچی دوو Form Request هەیە؟**

چونکە زیادکردن و نوێکردنەوە هەمان یاسایان نییە. لە زیادکردندا ناو، کۆدی وانە و ڕێکەوت پێویستن؛ لە PATCH دەتوانم تەنها یەک خانە بنێرم.

**٢٠. `sometimes` و `nullable` یەک شتن؟**

نەخێر. `sometimes` واتە ئەگەر خانەکە نێردرا، یاساکانی بپشکنە. `nullable` واتە بەهای `null` ڕێگەپێدراوە. بۆ نموونە `priority` دەتوانێت هەر نەنێردرێت، بەڵام ئەگەر نێردرا نابێت `null` بێت.

**٢١. ئەگەر داتا هەڵە بێت چی ڕوو دەدات؟**

Laravel وەڵامی JSON بە کۆدی `422` و پەیامی خانە هەڵەکان دەگەڕێنێتەوە. کۆدی پاشەکەوتکردنی ناو مێثۆدی Controller جێبەجێ نابێت.

**٢٢. بۆچی ڕێکەوتی کۆن لە POST ڕەت دەکرێتەوە، بەڵام لە PATCH ڕێگەپێدراوە؟**

چونکە `after_or_equal:today` تەنها لە Store Request هەیە. Update ڕێگە دەدات ئەرکی کۆن یان دواکەوتووش دەستکاری بکرێت.

**٢٣. Route Model Binding چی سوودێکی هەیە؟**

Laravel بە ID تۆمارەکە دەدۆزێتەوە و دەیدات بە مێثۆدەکە. ئەگەر نەبوو خۆی `404` دەدات، بۆیە کۆدی گەڕان و پشکنینی نەبوونی تۆمار دووبارە ناکەمەوە.

**٢٤. بۆچی دوای `create()`، `refresh()` هەیە؟**

بۆ ئەوەی ئۆبجێکتەکە بە داتای پاشەکەوتکراو نوێ بێتەوە، بە تایبەتی بەها بنەڕەتییەکانی داتابەیس کە لە داواکارییەکەدا نەنێردراون.

**٢٥. جیاوازی `query()` و `get()` چییە؟**

`query()` ئامادەکردنی پرسیار دەست پێ دەکات. دەتوانم `where` و `orderBy` زیاد بکەم. `get()` ئەنجامەکان لە داتابەیس دەهێنێت.

**٢٦. بۆچی دوو `orderBy` هەیە؟**

یەکەم بۆ ڕێکەوتی زووترە. دووەم بۆ ئەوەی ئەگەر ڕێکەوت یەکسان بوو، بە ID ڕیزبەندیی دیاریکراو هەبێت.

**٢٧. Resource بۆچی بەکاردێت؟**

بۆ هەڵبژاردنی خانەکانی وەڵام و ڕێکخستنی شێوەیان؛ وەک گەورەکردنی پیتی کۆدی وانە و شێوەی ڕێکەوت.

**٢٨. ئایا `strtoupper()` لە Resource، داتابەیس دەگۆڕێت؟**

نەخێر. لێرە تەنها بەهای وەڵامی JSON دەگۆڕێت. بۆ گۆڕینی داتای پاشەکەوتکراو پێویستە کارێک لە شوێنی پاشەکەوتکردن یان Model زیاد بکرێت.

**٢٩. جیاوازی `new AssignmentResource` و `AssignmentResource::collection` چییە؟**

یەکەم بۆ یەک تۆمارە، دووەم بۆ لیستی تۆمارەکانە. هەردووکیان هەمان ڕێکخستنی خانەکان بەکار دەهێنن.

**٣٠. بۆچی DELETE وەڵامی JSON ناگەڕێنێتەوە؟**

چونکە `response()->noContent()` بەکارهاتووە؛ کۆدی `204` واتە کارەکە سەرکەوتووە و ناوەڕۆکی وەڵام بەتاڵە.

### پرسیارەکانی JavaScript و پەیوەندیی API

**٣١. `fetch()` چی دەکات؟**

لە JavaScript داواکاریی HTTP دەنێرێت. لەم پڕۆژەیەدا بۆ GET، POST، PATCH و DELETE بەکارهاتووە.

**٣٢. `JSON.stringify()` و `response.json()` چ جیاوازییەکیان هەیە؟**

یەکەم داتای JavaScript دەکاتە دەقی JSON بۆ ناردن. دووەم وەڵامی JSON دەخوێنێتەوە و دەیکاتە داتای JavaScript بۆ بەکارهێنان.

**٣٣. جیاوازی `Accept` و `Content-Type` چییە؟**

`Content-Type` دەڵێت داتای نێردراو چ جۆرێکە. `Accept` دەڵێت Client چ جۆرە وەڵامێکی دەوێت. لە POST و PATCH ـەکاندا هەردووکیان `application/json` ـن.

**٣٤. دوگمەکانی فلتەر داواکاریی نوێ دەنێرن؟**

لەم ڕووکارەدا نا؛ لە ناو لیستی `allAssignments` بە JavaScript فلتەر دەکەن. بەڵام API توانای فلتەری Backend ـیشی بە `?status=...` هەیە.

**٣٥. بۆچی `preventDefault()` هەیە؟**

بۆ ئەوەی فۆرم بە شێوازی ئاسایی پەڕەکە دووبارە بار نەکاتەوە. لەبری ئەوە JavaScript بە `fetch` داتا دەنێرێت.

**٣٦. `escapeHtml()` بۆچی هەیە؟**

بۆ ئەوەی دەقی ناو و وەسفی ئەرک وەک دەق پیشان بدرێت و لە شوێنی دانانی داتاکە وەک HTML لێک نەدرێتەوە. ئەمە بۆ ڕێگرتن لە XSS لەو شوێنانە گرنگە.

**٣٧. ئەگەر لە نمرەداندا Cancel بکەم چی ڕوو دەدات؟**

ڕووکار هیچ PATCH ـێک نانێرێت و هەڵبژاردنی دۆخ دەگەڕێنێتەوە بۆ پێشوو. ئەگەر دۆخێکی نانمرەدراو هەڵبژێرم، ڕووکار نمرە بە `null` دەنێرێت.

**٣٨. بۆچی `latestRequest` بەکارهاتووە؟**

بۆ ئەوەی ئەگەر وەڵامی داواکارییەکی کۆن دواتر گەیشت، داتای نوێ جێگرەوە نەکات. تەنها وەڵامی داواکاریی دواهەم وەردەگیرێت.

### پرسیارە وردەکان؛ ئەمانە باش تێبگە

**٣٩. ئایا هەر بەکارهێنەرێک تەنها ئەرکەکانی خۆی دەبینێت؟**

نەخێر. ڕێگاکان گشتین، `user_id` لە ئەرکەکان نییە و Login یان خاوەندارێتی جێبەجێ نەکراوە. ئەمە نموونەیەکی وانەیی بە داتای هاوبەشە.

**٤٠. بوونی Sanctum لە `composer.json` واتە API پارێزراوە؟**

نەخێر. تەنها دامەزراندنی پەکەج بەس نییە. لە `routes/api.php`، middleware ـی `auth:sanctum` بۆ ئەم ڕێگایانە دانەنراوە.

**٤١. ئایا API ناچار دەکات `graded` هەمیشە نمرەی هەبێت؟**

نەخێر. لە Validation ـدا `grade` دەتوانێت `null` بێت و یاسایەکی مەرجدار لەسەر `status` نییە. ڕووکار بۆ `graded` نمرە داوا دەکات، بەڵام ئەو داواکارییە بە هەمان شێوە لە Backend ناچار نەکراوە.

**٤٢. ئەگەر بە PATCH تەنها دۆخ بگۆڕم، نمرە پاک دەبێتەوە؟**

لە خودی API ـدا نا؛ خانەی نەنێردراو ناگۆڕدرێت. ڕووکار بۆ دۆخی نانمرەدراو بە ئاشکرا `grade: null` دەنێرێت، بۆیە لە ڕووکاردا پاک دەبێتەوە.

**٤٣. بۆچی Seeder ڕێکەوتی کۆنی تێدایە؟**

بۆ نموونەی ئەرکی کۆن و نمرەدراوە. Seeder ڕاستەوخۆ Model بەکاردەهێنێت و بە Form Request ـی POST تێناپەڕێت.

**٤٤. ئەگەر هیچ ئەرکێک لە فلتەرەکەدا نەبوو، `404` دەگەڕێتەوە؟**

نەخێر. لیستێکی بەتاڵ بە `200` و `data: []` دەگەڕێتەوە. `404` بۆ داوای تۆمارێکی دیاریکراوی نەبوو یان ڕێگای نەبووە.

**٤٥. چۆن دڵنیا دەبیت داتای هەڵە پاشەکەوت نابێت؟**

Validation پێش مێثۆدی پاشەکەوتکردن جێبەجێ دەبێت. هەروەها تاقیکردنەوە هەیە کە PATCH ـی هەڵە دەنێرێت و دڵنیا دەبێتەوە ناوی پێشووی تۆمارەکە نەگۆڕاوە.

**٤٦. ئەگەر هەموو Tests پاس بوون، واتە هەموو شتێک بێ هەڵەیە؟**

نەخێر. واتە ئەو دۆخانەی نووسراون سەرکەوتوو بوون. دوگمەکان و ڕەفتاری JavaScript ـی وێبگەڕ لەم تاقیکردنەوانەدا بە تەواوی تاقی نەکراونەتەوە.

**٤٧. ئەگەر مامۆستا بڵێت خانەیەکی نوێ زیاد بکە، چ هەنگاوێک دەگرێت؟**

بۆ خانەیەکی پاشەکەوتکراوی نوێ، Migration ـی نوێ دروست دەکەم، لە `$fillable` زیادی دەکەم، یاساکانی Store و Update ڕێک دەخەم، Resource نوێ دەکەمەوە، و ئەگەر لە ڕووکار پێویست بێت فۆرم و پیشاندانیش دەگۆڕم. پاشان ڕەفتارەکە دەپشکنم.

**٤٨. بۆچی لە پڕۆژەی کاراکراودا Migration ـی نوێ دەنووسیت؟**

چونکە Migration ـی کۆن دەتوانێت پێشتر جێبەجێ کرابێت. گۆڕینی فایلە کۆنەکە بە تەنها گۆڕانکاریی نوێ لە داتابەیسی پێشوو جێبەجێ ناکات.

<a id="limits"></a>

## ١٧. پڕۆژەکە ئێستا چییە و چۆن دەتوانرێت گەشەی پێ بدرێت؟

ئەگەر مامۆستا پرسی «سنوورەکانی کارت چین؟»، بە ڕوونی وەڵام بدە. باشە بتوانیت جیاوازیی نێوان ئەوەی جێبەجێ کراوە و ئەوەی تەنها بیرۆکەیە بزانیت.

| دۆخی ئێستا لە کۆدەکە | گەشەپێدانی داهاتوو |
| --- | --- |
| ئەرکەکان هاوبەشن و ڕێگاکان گشتین | Login، ناساندنی بەکارهێنەر و پاراستنی API |
| `user_id` لە خشتەی ئەرکەکان نییە | دیاریکردنی خاوەنی ئەرک و پشکنینی مافی دەستکاری |
| `get()` هەموو ئەنجامەکان دەهێنێت | Pagination بۆ داتای زۆر |
| تەنها فلتەری دۆخ هەیە | گەڕان بە ناو و فلتەر بە وانە یان ڕێکەوت |
| نمرە و دۆخ لە Backend بە یاسای مەرجدار نەبەستراونەتەوە | یاسای ڕوون بۆ نمرەدانی ئەرک |
| ڕووکار بۆ Update تەنها دۆخ و نمرە دەگۆڕێت | فۆرمی دەستکاریی ناو، وەسف، ڕێکەوت و گرنگی |
| ئەنجامی API بە تاقیکردنەوە پشکنراوە | تاقیکردنەوەی ڕەفتاری ڕووکار لە وێبگەڕ |
| جوانکاری لە CDN ـەوە دێت | دروستکردنی فایلەکانی CSS لە ناو پڕۆژە بۆ بەکارهێنانی بێ ئینتەرنێت |

ڕستەیەکی ئاسان بۆ وەڵام:

> «ئەم وەشانە بۆ فێربوونی CRUD و Laravel API ـە. ئەگەر بیکەمە سیستەمێکی گەورەتر، یەکەم Login و خاوەندارێتیی ئەرکەکان زیاد دەکەم، پاشان Pagination و یاسای وردتر بۆ نمرەدان.»

### ئەگەر داوای گۆڕانکارییەکی بچووک کرا

**نموونە: زۆرترین نمرە لە 100 بگۆڕە بۆ 20.**

دەبێت بیر لە هەموو شوێنە پەیوەندیدارەکان بکەیتەوە: `max:100` لە هەردوو Request، پشکنینی `grade > 100` و پەیامی `prompt` لە JavaScript، پیشاندانی `/100`، داتای Seeder/Factory و تاقیکردنەوەکان. گۆڕینی تەنها یەک پەیام، یاسای سیستەم ناگۆڕێت.

**نموونە: دۆخێکی نوێ بە ناوی `cancelled` زیاد بکە.**

دەبێت پێکهاتەی داتابەیس، لیستی `in` لە هەردوو Request و فلتەری `index`، هەڵبژاردە و ڕەنگەکانی ڕووکار و تاقیکردنەوەکان پێکەوە بگونجێنیت.

ئەم نموونانە تەنها بۆ تێگەیشتن و ڕاهێنانن؛ کۆدی پڕۆژە لەگەڵ نووسینی ئەم ڕێبەرەدا نەگۆڕدراوە.

<a id="revision"></a>

## ١٨. ئامادەکاریی کۆتایی بۆ تاقیکردنەوە

### دەقێکی سادە بۆ دەستپێکی پێشکەشکردن

> «پڕۆژەکەم Campus Assignment Tracker ـە. مەبەستی بەڕێوەبردنی ئەرکەکانی خوێندکارە. بە Laravel API دروست کراوە و ڕووکارێکی Blade و JavaScript ـی هەیە. بەکارهێنەر دەتوانێت ئەرک زیاد بکات، بیبینێت، دەستکاری بکات و بیسڕێتەوە. ڕێگاکان لە routes/api.php دیاری کراون. Controller کارەکان بەڕێوە دەبات، Model لەگەڵ داتابەیس کار دەکات، Form Request داتا دەپشکنێت و Resource وەڵامی JSON ڕێک دەخات. هەمان API بە Postman ـیش تاقی دەکەمەوە.»

پاش ئەم دەستپێکە، بە کردار یەک ئەرک زیاد بکە و هەمان ئەرک لە GET، PATCH و DELETE ـدا بەکار بهێنە. ئەمە تێگەیشتنت لە کارکردنی سیستەمەکە پیشان دەدات.

### ئەگەر مامۆستا بڵێت «ئەم کۆدە ڕوون بکەرەوە»

ئەم سێ پرسیارە لە خۆت بکە و بە ڕیز وەڵامیان بدە:

1. **چی وەردەگرێت؟** بۆ نموونە Request یان ئەرکێکی دۆزراوە.
2. **چی دەکات؟** پشکنین، هێنانی داتا، زیادکردن یان گۆڕین.
3. **چی دەگەڕێنێتەوە؟** Resource، JSON یان وەڵامی بەتاڵ بە کۆدی HTTP.

بۆ نموونە بۆ `store()`:

> «داتای پشکنراو وەردەگرێت، بە Model تۆمارێکی نوێ دروست دەکات، بە refresh داتای داتابەیس نوێ دەکاتەوە، و بە Resource و کۆدی 201 دەیگەڕێنێتەوە.»

### پلانی خوێندنەوەی یەک کاتژمێر

| ماوە | چی بکەیت؟ |
| --- | --- |
| 10 خولەک | ئامانجی پڕۆژە، وشەکان و نەخشەی فایلەکان بخوێنەوە |
| 15 خولەک | پێنج Route و پێنج مێثۆدی Controller لەگەڵ کۆدەکە ببینە |
| 10 خولەک | Validation، `$fillable`، Resource و `refresh()` تێبگە |
| 10 خولەک | بە Postman یەک چرخی POST → GET → PATCH → DELETE بکە |
| 10 خولەک | پرسیارەکان بە دەنگی بەرز وەڵام بدەوە |
| 5 خولەک | دەستپێکی پێشکەشکردن و پوختەی خوارەوە دووبارە بکەوە |

### پوختەی زۆر خێرا بۆ پێش تاقیکردنەوە

| بابەت | یادت بێت |
| --- | --- |
| ئامانج | بەڕێوەبردنی ئەرکەکانی خوێندکار |
| خشتە | `assignments` |
| `index` | لیست، فلتەر و ڕیزبەندی |
| `store` | زیادکردن → `201` |
| `show` | یەک ئەرک → `200` یان `404` |
| `update` | گۆڕینی خانە نێردراوەکان → `200` |
| `destroy` | سڕینەوە → `204` |
| داتای هەڵە | `422`؛ پاشەکەوت نابێت |
| PUT | Route ـی نییە → `405` |
| خانە پێویستەکانی POST | `title`، `course_code`، `due_date` |
| بەها بنەڕەتییەکان | `priority=medium`، `status=pending` |
| نمرە | `null` یان ژمارەی تەواوی `0–100` |
| `sometimes` | ئەگەر نێردرا، بیپشکنە |
| `nullable` | `null` ڕێگەپێدراوە |
| `$fillable` | خانە ڕێگەپێدراوەکانی Mass Assignment |
| `refresh()` | خوێندنەوەی نوێی هەمان تۆمار لە داتابەیس |
| Resource | شێوەی وەڵام؛ گۆڕینی پیتی کۆدی وانە لێرەیە |
| فلتەری ڕووکار | JavaScript و `allAssignments` |
| فلتەری API | `?status=...` و `where()` |
| Login | لەم وەشانەدا جێبەجێ نەکراوە |

### خۆت تاقی بکەرەوە؛ بەبێ سەیرکردنی وەڵام

1. بۆچی POST ناوی پێویستە، بەڵام PATCH دەتوانێت ناو نەنێرێت؟
2. ئەگەر `priority` نەنێریت چی ڕوو دەدات؟ ئەگەر `null` بنێریت چی؟
3. بۆچی دەتوانیت لە Resource، `format()` بۆ `due_date` بانگ بکەیت؟
4. کۆدی گەورەکردنی پیتی وانە داتابەیس دەگۆڕێت یان وەڵام؟
5. بۆچی داتای وەڵام بە `result.data` وەردەگیرێت؟
6. بۆچی لە DELETE ـدا `res.json()` بەکار نەهاتووە؟
7. ئەگەر ئەرکێک نەدۆزرایەوە، کێ `404` دروست دەکات؟
8. بۆچی پشکنینی HTML بە تەنها بۆ دروستیی داتا بەس نییە؟
9. ئەگەر دوو داواکاری بە ڕیزێکی پێچەوانە وەڵامیان گەیشت، چی پارێزگاری لە لیست دەکات؟
10. ئایا API خۆی نمرە و دۆخ بە یاسایەکی مەرجدار بەیەکەوە دەبەستێت؟

ئەگەر بتوانیت بە زمانی خۆت وەڵامیان بدەیتەوە و شوێنی کۆدەکە پیشان بدەیت، تێگەیشتنێکی باشت لە بەشە سەرەکییەکانی پڕۆژەکە هەیە.

<a id="verification"></a>

## ١٩. پشکنینی ئەم ڕێبەرە

ئەم ڕێبەرە لە **٢ی تشرینی دووەمی ٢٠٢٦** لەسەر فایلەکانی هەمان پڕۆژە ئامادە کراوە؛ نموونەکان پەیوەستن بە کۆدی ئێستا.

- فایلەکانی Route، Controller، Request، Model، Resource، Migration، Seeder، Factory، ڕووکار، Postman و تاقیکردنەوەکان خوێندرانەوە.
- `php artisan route:list --path=api` پێنج Route ـی API پیشان دا.
- تاقیکردنەوەکان بە SQLite ـی کاتیی `:memory:` جێبەجێ کران: **١٧ تاقیکردنەوە سەرکەوتوو بوون، بە ٧٠ پشکنین**.
- ڕوونکردنەوەی JavaScript لەسەر خوێندنەوەی کۆدەکەیە؛ تاقیکردنەوەی کرداریی دوگمەکان لە وێبگەڕ لە ئەنجامی ئەو ١٧ تاقیکردنەوەیەدا ناژمێردرێت.

سەرچاوەی سەرەکی بۆ تێگەیشتن، خودی فایلە بەستراوەکانی ئەم پڕۆژەیەن. ئەگەر دواتر کۆدەکە بگۆڕیت، ئەو بەشانەی ڕێبەرەکەش لەگەڵیدا نوێ بکەرەوە.
