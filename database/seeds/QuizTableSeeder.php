<?php

use App\Quiz;
use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();

        $quizzes = $quizs =  [
            [
                'title_id' => 1,
                'question' => 'Googleが作ったフレームワークはどれ？',
                'answer1' => 'Vue.js',
                'answer2' => 'AngularJS',
                'answer3' => 'React',
                'answer4' => 'jQuery',
                'answer' => 2,
                'description' => 'AngularJSですよー'
            ],
            [
                'title_id' => 1,
                'question' => 'HTTP通信を行うためによく使われるライブラリはどれ？',
                'answer1' => 'axios',
                'answer2' => 'Lodash',
                'answer3' => 'Moment.js',
                'answer4' => 'D3.js',
                'answer' => 1,
                'description' => '他の選択肢は全然Ajaxのライブラリではないですよ。'
            ],
            [
                'title_id' => 1,
                'question' => 'JavaScript以外のプログラミング言語でフロントエンドを構築するための技術は何？',
                'answer1' => 'web3.0',
                'answer2' => 'NoCode',
                'answer3' => 'WebAssembly',
                'answer4' => 'PWA',
                'answer' => 1,
                'description' => 'ちょっと難しかったかなぁ？'
            ],
            [
                'title_id' => 1,
                'question' => '次のうち、最終的にJavaScriptにコンパイルされる言語でないものはどれ？',
                'answer1' => 'TypeScript',
                'answer2' => 'CoffeScript',
                'answer3' => 'Dart',
                'answer4' => 'PureScript',
                'answer' => 3,
                'description' => ''
            ],
            [
                'title_id' => 1,
                'question' => '次のうち、TypeScriptの特徴でないものはどれ？',
                'answer1' => '性的型付け言語である',
                'answer2' => 'enumが使える',
                'answer3' => 'JavaScriptのスーパーセットである',
                'answer4' => 'オブジェクト志向的書き方ができる',
                'answer' => 1,
                'description' => '性的とかw'
            ],
            [
                'title_id' => 2,
                'question' => '一般的にギターには何本の弦が張られている？',
                'answer1' => '4本',
                'answer2' => '3本',
                'answer3' => '5本',
                'answer4' => '6本',
                'answer' => 4,
                'description' => '4本はベースかな。3本は三味線かな。'
            ],
            [
                'title_id' => 2,
                'question' => '3弦の開放弦の音は何？',
                'answer1' => 'C',
                'answer2' => 'E',
                'answer3' => 'D',
                'answer4' => 'G',
                'answer' => 4,
                'description' => 'ソの音だね。'
            ],
            [
                'title_id' => 2,
                'question' => 'ベース音と5度の2音だけを出すコードのことを何という？',
                'answer1' => 'アッパーストラクチャー',
                'answer2' => 'テンションコード',
                'answer3' => 'パワーコード',
                'answer4' => 'トライアドコード',
                'answer' => 3,
                'description' => 'ロックでよく使われるけど、くるりのボーカルの人は使わないよ。'
            ],
            [
                'title_id' => 2,
                'question' => '布袋寅泰やJudy&MaryのTAKUYAが使うギターの種別は何？',
                'answer1' => 'ストラトキャスター',
                'answer2' => 'テレキャスター',
                'answer3' => 'レスポール',
                'answer4' => 'アコースティック',
                'answer' => 2,
                'description' => 'まぁアコギも使うんだろうけどさ。'
            ],
            [
                'title_id' => 2,
                'question' => 'ピッキングせずに指を弦に押さえつけるだけで音を出す奏法を何という？',
                'answer1' => 'ハンマリングオン',
                'answer2' => 'プリングオフ',
                'answer3' => 'チョーキング',
                'answer4' => 'アーミング',
                'answer' => 1,
                'description' => 'どうなんやろね。'
            ],
            [
                'title_id' => 3,
                'question' => 'サピエンス全史の作者は誰？',
                'answer1' => 'ジャスティン・ビーバー',
                'answer2' => '山川出版社',
                'answer3' => 'ユヴァル・ノア・フラリ',
                'answer4' => 'ユヴァル・ノア・ハラリ',
                'answer' => 4,
                'description' => '覚えにくい名前だよね。'
            ],
            [
                'title_id' => 3,
                'question' => '私達サピエンスがみんなで力を合わせるきっかけになるのは何？',
                'answer1' => '虚構',
                'answer2' => '会話',
                'answer3' => '知能',
                'answer4' => '協調性',
                'answer' => 1,
                'description' => 'フィクション'
            ],
            [
                'title_id' => 3,
                'question' => '次のうち二足歩行が原因となる事柄でないものはどれ？',
                'answer1' => 'まだ未熟な状態で赤ちゃんが生まれる',
                'answer2' => '背中を掻くことができる',
                'answer3' => '道具を作ることができる',
                'answer4' => '腰痛や肩こりになりやすい',
                'answer' => 1,
                'description' => 'なるほどね。'
            ],
            [
                'title_id' => 4,
                'question' => '「イノベーション」の説明として正しいものを選べ',
                'answer1' => '2声体の鍵盤楽曲',
                'answer2' => '手を加えて良くすること',
                'answer3' => '人が何かする際の動機づけ',
                'answer4' => '新しい技術や考え方を取り入れて社会的に大きな変化を起こすこと',
                'answer' => 4,
                'description' => 'その他はインベンション・リノベーション・モチベーションの説明だったよ。'
            ],
            [
                'title_id' => 4,
                'question' => '次のうち「貸借対照表」の説明はどれ？',
                'answer1' => '企業のある一定時点における資産、負債、純資産の状態を表すもの',
                'answer2' => '企業のある一定期間における収益と費用の状態を表すもの',
                'answer3' => '会計期間における資金の増減、つまり収入と支出を表示する',
                'answer4' => '純資産の変動状況を表すもの',
                'answer' => 1,
                'description' => '難しいね・・。'
            ],
            [
                'title_id' => 4,
                'question' => '次のうち「資産」でないものはどれ？',
                'answer1' => '現金',
                'answer2' => '手形',
                'answer3' => '借入金',
                'answer4' => '貸付金',
                'answer' => 3,
                'description' => '会計のお話です。'
            ],
        ];

        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}
