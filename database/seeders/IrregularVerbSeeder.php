<?php

namespace Database\Seeders;

use App\Models\IrregularVerb;
use Illuminate\Database\Seeder;

class IrregularVerbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $irregularverbs = [
            'arise' => ['arose', 'arisen'],
            'awake' => ['awoke', 'awoken'],
            'be' => ['was/were', 'been'],
            'become' => ['became', 'become'],
            'begin' => ['began', 'begun'],
            'break' => ['broke', 'broken'],
            'bring' => ['brought', 'brought'],
            'build' => ['built', 'built'],
            'buy' => ['bought', 'bought'],
            'catch' => ['caught', 'caught'],
            'choose' => ['chose', 'chosen'],
            'come' => ['came', 'come'],
            'cost' => ['cost', 'cost'],
            'cut' => ['cut', 'cut'],
            'do' => ['did', 'done'],
            'draw' => ['drew', 'drawn'],
            'drink' => ['drank', 'drunk'],
            'drive' => ['drove', 'driven'],
            'eat' => ['ate', 'eaten'],
            'fall' => ['fell', 'fallen'],
            'feel' => ['felt', 'felt'],
            'find' => ['found', 'found'],
            'fly' => ['flew', 'flown'],
            'forget' => ['forgot', 'forgotten'],
            'get' => ['got', 'got'],
            'give' => ['gave', 'given'],
            'go' => ['went', 'gone'],
            'grow' => ['grew', 'grown'],
            'have' => ['had', 'had'],
            'hear' => ['heard', 'heard'],
            'hide' => ['hid', 'hidden'],
            'hit' => ['hit', 'hit'],
            'hold' => ['held', 'held'],
            'hurt' => ['hurt', 'hurt'],
            'keep' => ['kept', 'kept'],
            'know' => ['knew', 'known'],
            'learn' => ['learnt', 'learnt'],
            'leave' => ['left', 'left'],
            'lend' => ['lent', 'lent'],
            'let' => ['let', 'let'],
            'lose' => ['lost', 'lost'],
            'make' => ['made', 'made'],
            'mean' => ['meant', 'meant'],
            'meet' => ['met', 'met'],
            'pay' => ['paid', 'paid'],
            'put' => ['put', 'put'],
            'read' => ['read', 'read'],
            'ride' => ['rode', 'ridden'],
            'ring' => ['rang', 'rung'],
            'run' => ['ran', 'run'],
            'say' => ['said', 'said'],
            'see' => ['saw', 'seen'],
            'sell' => ['sold', 'sold'],
            'send' => ['sent', 'sent'],
            'show' => ['showed', 'shown'],
            'sing' => ['sang', 'sung'],
            'sit' => ['sat', 'sat'],
            'sleep' => ['slept', 'slept'],
            'speak' => ['spoke', 'spoken'],
            'spend' => ['spent', 'spent'],
            'stand' => ['stood', 'stood'],
            'swim' => ['swam', 'swum'],
            'take' => ['took', 'taken'],
            'teach' => ['taught', 'taught'],
            'tell' => ['told', 'told'],
            'think' => ['thought', 'thought'],
            'throw' => ['threw', 'thrown'],
            'understand' => ['understood', 'understood'],
            'wake' => ['woke', 'woken'],
            'wear' => ['wore', 'worn'],
            'win' => ['won', 'won'],
            'write' => ['wrote', 'written'],
        ];

        foreach ($irregularverbs as $verb => $past) {
            IrregularVerb::create([
                'infinitive' => $verb,
                'past_simple' => $past[0],
                'past_participle' => $past[1],
            ]);
        }
    }
}
