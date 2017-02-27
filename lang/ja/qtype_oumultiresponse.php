<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * OU multiple response question type language strings (ja).
 *
 * @package    qtype_oumultiresponse
 * @copyright  2017 Toru Shinohara
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['choices'] = '利用可能な選択肢';
$string['combinedcontrolnameoumultiresponse'] = 'チェックボックス群';
$string['correctanswer'] = '正答';
$string['err_correctanswerblank'] = 'この選択肢は正答にマークしましたが、空白です。';
$string['err_nonecorrect'] = '選択肢を正答にマークしていません。';
$string['err_youneedmorechoices'] = '2つ以上の選択肢を設定する必要があります。';
$string['notenoughcorrectanswers'] = '少なくとも1つの正答をマークする必要があります';
$string['pluginname'] = 'OU多肢選択問題';
$string['pluginname_help'] = 'いくつかの特別な得点ルールを持つ多肢選択回答の質問タイプ。';
$string['pluginname_link'] = 'question/type/oumultiresponse';
$string['pluginnameadding'] = 'OU多肢選択問題を追加する';
$string['pluginnameediting'] = 'OU多肢選択問題を編集する';
$string['pluginnamesummary'] = 'いくつかの特別な得点ルールを持つ多肢選択回答の質問タイプ。';
$string['toomanyoptions'] = '選択肢が多すぎます。';
$string['showeachanswerfeedback'] = '選択した回答のフィードバックを表示する';
//-->modified
$string['correctanswers'] = '正答数';
$string['correctanswers_help'] = "空欄にするとオリジナルのqtype_oumultiresponseとして動作します。\n
0をセットすると完全回答問題として動作します。\n
数値をセットすると正解のうち何個を選べば合格するモード(n者択m)で動作します。";
