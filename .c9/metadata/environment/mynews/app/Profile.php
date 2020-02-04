{"filter":false,"title":"Profile.php","tooltip":"/mynews/app/Profile.php","undoManager":{"mark":21,"position":21,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":14,"column":6},"action":"insert","lines":[" protected $guarded = array('id');","","    // 以下を追記","    public static $rules = array(","        'title' => 'required',","        'body' => 'required',","    );"],"id":3}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["        'body' => 'required',",""],"id":4}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["        'body' => 'required',",""],"id":5}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"remove","lines":["e"],"id":7},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"remove","lines":["l"]},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"remove","lines":["t"]},{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"remove","lines":["i"]},{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"remove","lines":["t"]}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["n"],"id":8},{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["a"]},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["m"]},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":13},"action":"remove","lines":["name"],"id":9},{"start":{"row":12,"column":9},"end":{"row":12,"column":13},"action":"insert","lines":["name"]}],[{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"remove","lines":["y"],"id":10},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"remove","lines":["d"]},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"remove","lines":["o"]},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"remove","lines":["b"]}],[{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["g"],"id":11},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["e"]},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["n"]},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["d"]},{"start":{"row":13,"column":13},"end":{"row":13,"column":14},"action":"insert","lines":["e"]},{"start":{"row":13,"column":14},"end":{"row":13,"column":15},"action":"insert","lines":["r"]}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["y"],"id":12},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"remove","lines":["d"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"remove","lines":["o"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":["b"]}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["h"],"id":13},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["o"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["b"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["b"]},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["y"]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":["y"],"id":14},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"remove","lines":["d"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["o"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"remove","lines":["b"]}],[{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["i"],"id":15},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["n"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["t"]}],[{"start":{"row":15,"column":9},"end":{"row":15,"column":12},"action":"remove","lines":["int"],"id":16},{"start":{"row":15,"column":9},"end":{"row":15,"column":21},"action":"insert","lines":["introduction"]}],[{"start":{"row":16,"column":6},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":4},"end":{"row":21,"column":5},"action":"insert","lines":["public function histories()","    {","      return $this->hasMany('App\\History');","","    }"],"id":18}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["p"],"id":19},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["r"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["o"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["f"]},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["i"]},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["l"]},{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"insert","lines":["r"]}],[{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"remove","lines":["r"],"id":20}],[{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"insert","lines":["e"],"id":21},{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":["_"]}],[{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"remove","lines":["H"],"id":22}],[{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["P"],"id":23},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["r"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"insert","lines":["o"]},{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"insert","lines":["f"]},{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"insert","lines":["i"]},{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"insert","lines":["l"]},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["_"],"id":24},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["h"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":31},"end":{"row":13,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":47,"mode":"ace/mode/php"}},"timestamp":1580634664600,"hash":"c3c7e39d69e4d930eeeeb5eb98ea200c20ad2e20"}