<?php
//Copyright (c) 2016 iFeiwu.com
 class Ifeiwu { protected $db; protected $table; protected $fields; protected $order; protected $admin; public function __construct() { goto wB31j; wTgrB: NEh34: goto kKwk3; ocaco: $this->order = array(); goto tr26C; jJMQP: $this->prefix = $this->db->getPrefix(); goto FbrqI; DsAug: $this->order[] = "\163\157\162\x74\142\171\40\104\x45\x53\x43"; goto wTgrB; kKwk3: if (!in_array("\x63\164\151\155\145", $this->fields)) { goto aWUwr; } goto iOr_N; tr26C: if (!in_array("\x73\x6f\162\164\142\x79", $this->fields)) { goto NEh34; } goto DsAug; wB31j: $this->admin = $_GET["\141\x64\x6d\x69\156"]; goto IBtfr; IBtfr: if (!$this->table) { goto Iry5d; } goto c_KrF; tPeQO: aWUwr: goto fAEGk; iOr_N: $this->order[] = "\143\x74\x69\155\x65\x20\104\105\123\x43"; goto tPeQO; c_KrF: $this->db = ifeiwu\Db::getInstance(); goto jJMQP; FbrqI: $this->fields = $this->_getTableFields($this->table); goto ocaco; fAEGk: Iry5d: goto MiRTx; MiRTx: } public function __destruct() { goto UZnVZ; UZnVZ: if (!APP_DEBUG) { goto lt570; } goto h4M1p; h4M1p: $this->_debug($this->db->log()); goto GLpA2; GLpA2: lt570: goto QDXMD; QDXMD: } protected function error($message = '', $data = null) { return $this->_result(1, $message, $data); } protected function success($message = '', $data = null) { return $this->_result(0, $message, $data); } protected function _result($code = 0, $message = '', $data = null) { goto F2KHn; z3w2h: iymzy: goto nNU6_; nvy58: goto qs_ib; goto z3w2h; AX64I: if (!$data) { goto lg5gk; } goto iFGzb; LCx0E: $res["\x63\x6f\144\x65"] = $code; goto UZLHU; GM9VJ: qs_ib: goto AX64I; nNU6_: $res["\x64\141\164\x61"] = $message; goto GM9VJ; F2KHn: $res = array(); goto LCx0E; VY50X: lg5gk: goto SVwcq; iFGzb: $res["\144\x61\x74\141"] = $data; goto VY50X; UZLHU: if (is_array($message)) { goto iymzy; } goto mOEcN; mOEcN: $res["\155\145\163\163\141\147\x65"] = $message; goto nvy58; SVwcq: return $res; goto Qsn6H; Qsn6H: } protected function _bulidData($request_data) { goto JB7OH; ms2fM: $data["\x73\x74\141\164\145"] = isset($data["\163\x74\x61\x74\145"]) ? $data["\163\164\141\x74\145"] : 0; goto xXMKE; WuP4H: $pid = $data["\x70\x69\x64"]; goto B05K0; NnLRT: $column = array("\151\144"); goto kvmvw; xXMKE: if (!isset($request_data["\143\164\151\155\145"])) { goto X6P5B; } goto L_WUM; lPFZt: e5W7E: goto ms2fM; hnyfH: $data["\152\163\157\x6e"] = $category ? json_encode(array("\143" => $category)) : ''; goto XzwCe; JB7OH: $data = array(); goto iSOZe; sz99Y: yM6Hj: goto JdU1D; B05K0: if (!($pid > 0 && in_array("\x6a\x73\x6f\x6e", $this->fields))) { goto CqP4B; } goto NnLRT; iU1w2: if (!in_array("\141\x6c\151\141\163", $this->fields)) { goto yM6Hj; } goto oOVYT; iSOZe: foreach ($this->fields as $field) { goto S0zes; fdp2T: if (!($value !== null)) { goto Nac0p; } goto Oq49u; Oq49u: $data[$field] = is_array($value) ? json_encode($value) : $this->_encode($value); goto hChy3; njoRc: p1W6J: goto rR_El; S0zes: $value = $request_data[$field]; goto fdp2T; hChy3: Nac0p: goto njoRc; rR_El: } goto lPFZt; oOVYT: $column[] = "\141\x6c\x69\141\163"; goto sz99Y; rFRTf: X6P5B: goto WuP4H; L_WUM: $data["\143\164\x69\x6d\x65"] = strtotime($request_data["\x63\164\151\x6d\x65"]); goto rFRTf; JdU1D: $category = $this->db->select($this->table, $column)->where("\151\144\x20\75\40{$pid}")->get(); goto hnyfH; xkhuB: QK18g: goto iU1w2; y7nNP: $column[] = "\x74\151\x74\154\145"; goto xkhuB; kvmvw: if (!in_array("\x74\151\164\x6c\x65", $this->fields)) { goto QK18g; } goto y7nNP; jhFZV: return $data; goto n24ok; XzwCe: CqP4B: goto jhFZV; n24ok: } protected function _encode($data) { goto QIq9Y; xXtQi: return array_map(array($this, "\137\x65\x6e\143\x6f\x64\x65"), $data); goto EoecM; uOf_U: if (!is_object($data)) { goto rSiKk; } goto D0_8f; c0xkd: rSiKk: goto pzGiS; QIq9Y: if (!is_array($data)) { goto ayr_4; } goto xXtQi; ijEfh: foreach ($data as $k => $v) { $tmp->{$k} = $this->_encode($v); V3L0C: } goto ArABf; D0_8f: $tmp = clone $data; goto ijEfh; ArABf: g8yDK: goto gO970; pzGiS: return htmlspecialchars($data, ENT_QUOTES); goto frY9r; gO970: return $tmp; goto c0xkd; EoecM: ayr_4: goto uOf_U; frY9r: } protected function _decode($data) { goto juIuQ; BPR6p: BzK9L: goto POZU1; nJrLp: AbDC5: goto f9yHZ; juIuQ: if (!is_array($data)) { goto BzK9L; } goto I0Sw4; ZJ7FD: $tmp = clone $data; goto KPEdb; KPEdb: foreach ($data as $k => $v) { $tmp->{$k} = $this->_decode($v); kKsTo: } goto izAkC; I0Sw4: return array_map(array($this, "\137\144\x65\x63\157\x64\145"), $data); goto BPR6p; f9yHZ: return htmlspecialchars_decode($data, ENT_QUOTES); goto Uz3rG; izAkC: ccaM9: goto AfJhI; AfJhI: return $tmp; goto nJrLp; POZU1: if (!is_object($data)) { goto AbDC5; } goto ZJ7FD; Uz3rG: } protected function _getTableFields($table) { goto gDhR9; mW24n: JA2Ql: goto vH6pW; PqjgL: if (!($i < $count)) { goto JA2Ql; } goto cBjIk; hMQSP: $table = $this->prefix . $this->table; goto Ei1C_; cBjIk: $column = $query->getColumnMeta($i); goto XFnPA; gDhR9: if ($table) { goto cABRi; } goto hMQSP; HM11g: goto bBZ29; goto mW24n; gI9FX: $i = 0; goto utOWy; XFnPA: $fields[] = $column["\156\141\x6d\145"]; goto vdadg; NNOwH: r8wKu: goto YK4Ys; LJLA8: $i++; goto HM11g; vdadg: DptLq: goto LJLA8; utOWy: bBZ29: goto PqjgL; YK4Ys: $query = $this->db->query("\123\105\114\105\x43\x54\x20\x2a\x20\106\x52\117\x4d\x20{$table}"); goto NGQGq; qwRqU: $table = $this->prefix . $table; goto NNOwH; vH6pW: return $fields; goto rgcvS; hVoM2: cABRi: goto qwRqU; Ei1C_: goto r8wKu; goto hVoM2; NGQGq: $count = $query->columnCount(); goto gI9FX; rgcvS: } protected function _callback($method, $params) { goto lkRaX; pbPNg: call_user_func_array(array($this, $method), $params); goto Wm8kw; lkRaX: if (!(is_callable(array($this, $method)) !== false)) { goto xa1jJ; } goto pbPNg; Wm8kw: xa1jJ: goto PxU6Y; PxU6Y: } protected function _getLevel($pid, $id) { goto AqM4D; PkwdC: lG8Io: goto V0EPC; G66wM: lUCS_: goto wp6Ui; ZdVqH: $pid = $this->db->select($this->table, "\160\x69\x64")->where(array("\x69\x64", "\75", $id))->get(0); goto G66wM; JVmEb: if (!($pid === '')) { goto lUCS_; } goto ZdVqH; Je8IW: goto VuFGA; goto nM5bU; Ksxcg: $this->_getLevel('', $pid); goto qMDe6; AqM4D: static $list = array(); goto JVmEb; nM5bU: ReoVa: goto atkGv; atkGv: return "\x2c" . implode("\x2c", array_reverse($list)) . "\54" . $id . "\x2c"; goto yqngw; yqngw: VuFGA: goto Rg5l9; qMDe6: jtjWz: goto EvJxe; I97_b: $list[] = $pid; goto Ksxcg; wp6Ui: if (!($pid != 0)) { goto jtjWz; } goto I97_b; EFHu4: if ($id) { goto ReoVa; } goto mNLML; mNLML: return "\54" . implode("\x2c", array_reverse($list)) . "\54"; goto Je8IW; Rg5l9: goto xOCvf; goto PkwdC; DyDlj: xOCvf: goto CR0Dt; EvJxe: if (count($list) == 0) { goto lG8Io; } goto EFHu4; V0EPC: return "\54" . $id . "\x2c"; goto DyDlj; CR0Dt: } protected function _saveData($table, $data, $where) { goto wR1g0; qyBQM: zbL0s: goto hXXaV; TR75h: Kz4_v: goto FP0Yn; FP0Yn: return $this->db->update($table, $data, $where)->is(); goto qyBQM; wR1g0: if ($this->db->select($table)->where($where)->has()) { goto Kz4_v; } goto bYC5W; n7xIT: goto zbL0s; goto TR75h; bYC5W: return $this->db->insert($table, $data)->is(); goto n7xIT; hXXaV: } protected function _saveImages($pid, $request_data) { goto MmCcq; zlAw1: $data["\x74\171\x70\x65"] = "\151\x6d\141\147\145"; goto B5ISP; MmCcq: $images_id = $request_data["\151\155\x61\147\145\163\x5f\x69\x64"]; goto BMlDw; s7Ug3: $images_path = $request_data["\x69\155\141\x67\145\163\137\160\x61\x74\x68"]; goto zF_2F; BMlDw: $images_order = $request_data["\x69\x6d\141\x67\145\x73\x5f\157\x72\x64\x65\x72"]; goto u3YeD; B5ISP: $data["\x70\151\x64"] = $pid; goto con6A; iTGgt: Oq6UF: goto X0Br0; u3YeD: $images_title = $request_data["\x69\155\141\147\x65\163\137\x74\151\x74\154\x65"]; goto Cl15c; zF_2F: $images_state = $request_data["\151\155\141\147\x65\163\137\163\x74\141\x74\145"]; goto zlAw1; Cl15c: $images_name = $request_data["\x69\155\x61\147\145\163\137\x6e\141\x6d\145"]; goto s7Ug3; uXOPF: foreach ($images_id as $i => $id) { goto eiBzc; xlaVv: $this->db->update($this->table, $data, array("\x69\x64", "\x3d", $id)); goto Z1NEj; Z1NEj: goto Cub9y; goto nhN2a; VZ0bL: $this->db->insert($this->table, $data); goto L2JqG; JbDEC: UOYfw: goto URAe1; nhN2a: tukr1: goto m8Qw4; GZfgD: $data["\x69\155\x61\x67\145\137\x70\141\x74\x68"] = $images_path[$i]; goto VZ0bL; YPUav: $data["\163\x74\141\164\x65"] = $images_state[$i]; goto xA7_P; dr7Fr: $data["\x6f\x72\144\x65\162\142\x79"] = $images_order[$i]; goto YPUav; Dk89T: Cub9y: goto JbDEC; eiBzc: $data["\x74\151\x74\154\x65"] = $images_title[$i]; goto dr7Fr; xA7_P: if (empty($id)) { goto tukr1; } goto xlaVv; L2JqG: unset($data["\151\155\141\147\145"], $data["\x69\155\x61\147\145\x5f\160\x61\x74\150"]); goto Dk89T; m8Qw4: $data["\151\x6d\141\x67\145"] = $images_name[$i]; goto GZfgD; URAe1: } goto iTGgt; con6A: $data["\x63\x74\151\155\x65"] = time(); goto uXOPF; X0Br0: } protected function _removeFiles2($files) { goto TtKLv; dVakf: pGwy2: goto B74Sc; lk9qo: $files = json_decode($files, true); goto dVakf; NtTDz: Ygm90: goto K6dxj; A3UlD: foreach ($files as $key => $value) { goto ZdapL; CbMmU: F9Ik5: goto WRQkL; Mvb1X: YqYB2: goto RE6gh; RE6gh: $path = "\56\56\57" . $value["\160\141\x74\x68"]; goto E7a4t; rABpE: unlink($filename); goto n9ydf; LXEKi: $filename = $path . "\57" . $name; goto WpJO2; WpJO2: if (!file_exists($filename)) { goto nuYyl; } goto rABpE; ZdapL: $name = $value["\156\x61\x6d\x65"]; goto Z0k95; gfYB4: CCjLG: goto j3QZP; PaK3y: foreach ($prefixs as $prefix) { goto A2Mgb; KEO_k: QZHhx: goto DLpVu; ehzwl: unlink($filename); goto KEO_k; DLpVu: MARDx: goto U1k73; A2Mgb: $filename = "{$path}\57{$prefix}{$name}"; goto mKevT; mKevT: if (!file_exists($filename)) { goto QZHhx; } goto ehzwl; U1k73: } goto CbMmU; D0Ov5: ZoH3u: goto W3Zt7; mxnin: if ($prefix) { goto CCjLG; } goto LXEKi; n9ydf: nuYyl: goto bTgbC; Z0k95: if ($name) { goto YqYB2; } goto DYMCw; bTgbC: goto kRLTN; goto gfYB4; E7a4t: $prefix = $value["\160\x72\145\146\x69\x78"]; goto mxnin; DYMCw: goto ZoH3u; goto Mvb1X; WRQkL: kRLTN: goto D0Ov5; j3QZP: $prefixs = explode("\54", $prefix); goto PaK3y; W3Zt7: } goto NtTDz; K6dxj: Rga1N: goto lgs_G; TtKLv: if (!(!empty($files) && !is_array($files))) { goto pGwy2; } goto lk9qo; B74Sc: if (!$files) { goto Rga1N; } goto A3UlD; lgs_G: } protected function _mkdir($path, $mode = 493) { goto H9ziG; H9ziG: if (is_dir($path)) { goto gEarJ; } goto bAFbx; PJcKU: return false; goto hH3x5; SstYu: gEarJ: goto PJcKU; bAFbx: return mkdir($path, $mode, true); goto SstYu; hH3x5: } protected function _rmdir($path) { goto UyVo6; dbjAH: LFhpm: goto EC1_M; JpfX7: $this->_rmdir("{$path}\x2f{$item}"); goto dbjAH; eBKGh: goto KWGol; goto Tsr5f; DMBWu: return true; goto GvHgW; PBs6L: unlink("{$path}\57{$item}"); goto C0zUv; HT3tM: UTKCy: goto JpfX7; MzObt: goto mQcrZ; goto FKRYK; EC1_M: mEBIO: goto MzObt; C0zUv: goto LFhpm; goto HT3tM; JBvEr: if (rmdir($path)) { goto LxK_D; } goto O16Jk; xFkJW: qvrKm: goto ona_F; R0EQt: if (!($handle = opendir($path))) { goto qvrKm; } goto Miy0N; O16Jk: return false; goto eBKGh; GvHgW: KWGol: goto xFkJW; FKRYK: xIUbB: goto ly8fl; M0deK: return false; goto XL7G_; XL7G_: dqFQQ: goto R0EQt; Tsr5f: LxK_D: goto DMBWu; zL84k: if (is_dir("{$path}\57{$item}")) { goto UTKCy; } goto PBs6L; UyVo6: if (is_dir($path)) { goto dqFQQ; } goto M0deK; pZw5G: if (!($item != "\56" && $item != "\x2e\56")) { goto mEBIO; } goto zL84k; ly8fl: closedir($handle); goto JBvEr; lqib1: if (!(false !== ($item = readdir($handle)))) { goto xIUbB; } goto pZw5G; Miy0N: mQcrZ: goto lqib1; ona_F: } protected function _bulidUploadPath($temp_path, $data) { goto FsOQL; NM7SR: return $true_path; goto k41w7; FsOQL: $id = $data["\151\144"]; goto ujNsh; qvi10: vNtgQ: goto NM7SR; ujNsh: $path_last = end(explode("\x2f", $temp_path)); goto vzAKg; vzAKg: if (!($path_last == $id)) { goto Ja41u; } goto L3aW4; mqfYv: aE2bZ: goto qvi10; oJamI: Rkf2z: goto NPXtX; L3aW4: return $temp_path; goto P7uAF; NPXtX: if (!is_dir("\56\x2e\x2f" . $temp_path)) { goto vNtgQ; } goto o34Iw; o34Iw: if (rename("\x2e\56\x2f" . $temp_path, "\56\x2e\x2f" . $true_path)) { goto aE2bZ; } goto u4lPC; u4lPC: $true_path = $temp_path; goto mqfYv; hihwx: $true_path = str_replace($path_last, $data[$vardir], $temp_path); goto oJamI; KjLZm: if (!(strpos($path_last, "\x21\75") !== false)) { goto Rkf2z; } goto vqoSb; P7uAF: Ja41u: goto KjLZm; vqoSb: $vardir = current(explode("\41\75", $path_last)); goto hihwx; k41w7: } protected function _toTree($list, $pk = "\x69\x64", $pid = "\x70\151\144", $child = "\x5f\143\150\151\x6c\x64", $root = 0) { goto o8ZI8; gg00l: return $tree; goto VOk7x; gzJkE: IgdnB: goto ozA14; G1oWO: goNP1: goto M532O; ozA14: foreach ($list as $key => $data) { goto Uhlyj; NWxDT: goto pJ5gY; goto GdYOg; bltHv: $parent =& $refer[$parentId]; goto Lp7XM; Uae06: zw5fW: goto NWxDT; e5cXJ: B9vXv: goto vjQVO; LbRPL: if ($root == $parentId) { goto uvfBQ; } goto PSTHv; PSTHv: if (!isset($refer[$parentId])) { goto zw5fW; } goto bltHv; GdYOg: uvfBQ: goto twKyu; Lp7XM: $parent[$child][] =& $list[$key]; goto Uae06; sYtcH: pJ5gY: goto e5cXJ; Uhlyj: $parentId = $data[$pid]; goto LbRPL; twKyu: $tree[] =& $list[$key]; goto sYtcH; vjQVO: } goto G1oWO; M532O: RqCDv: goto gg00l; x_nOn: foreach ($list as $key => $data) { $refer[$data[$pk]] =& $list[$key]; e6YOT: } goto gzJkE; lsroC: if (!is_array($list)) { goto RqCDv; } goto uI2gI; o8ZI8: $tree = array(); goto lsroC; uI2gI: $refer = array(); goto x_nOn; VOk7x: } protected function _rand($length, $islowercase = true, $isuppercase = true, $isnumber = true, $isspecial = false) { goto r6rAW; Cmf4L: fD7H2: goto vIdcX; z6aWZ: $i++; goto B_EME; CpPfw: fLysG: goto YMWho; ZsVpT: OkOvk: goto yyVHp; Tt801: ntG6O: goto MgUj2; vlLsC: $i = 0; goto Cmf4L; vIdcX: if (!($i < $length)) { goto fLysG; } goto nV83f; r7jnp: if (!$isuppercase) { goto OkOvk; } goto pN73K; qGSNB: rfJUe: goto z6aWZ; MgUj2: if (!$isspecial) { goto anr1l; } goto t8v_3; YMWho: return $result; goto TkXq9; yCVX6: $chars .= "\60\x31\62\x33\x34\x35\x36\x37\x38\71"; goto Tt801; i3vcv: $max = strlen($chars) - 1; goto vlLsC; RXujc: Y6ku8: goto r7jnp; r6rAW: if (!$islowercase) { goto Y6ku8; } goto EDpf4; t8v_3: $chars .= "\x21\100\43\x24\45\x5e\x26\52\50\x29"; goto Jpw3t; B_EME: goto fD7H2; goto CpPfw; pN73K: $chars .= "\101\102\x43\x44\105\106\107\110\111\112\x4b\x4c\115\x4e\x4f\x50\x51\122\x53\124\x55\x56\127\x58\x59\x5a"; goto ZsVpT; EDpf4: $chars .= "\141\x62\143\144\145\146\x67\x68\x69\152\153\154\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\170\x79\172"; goto RXujc; yyVHp: if (!$isnumber) { goto ntG6O; } goto yCVX6; nV83f: $result .= $chars[rand(0, $max)]; goto qGSNB; eUgbz: $result = ''; goto i3vcv; Jpw3t: anr1l: goto eUgbz; TkXq9: } protected function _UTF82GBK($str) { goto gOo7C; ykpJ4: return $str; goto yAvqo; hIWjo: return iconv("\125\124\106\x2d\70", "\x47\102\x4b\57\57\x49\x47\x4e\117\x52\105", $str); goto U0zHm; gOo7C: if (stripos(php_uname("\x73"), "\127\151\x6e\x64\x6f\x77") !== false) { goto xo2Yk; } goto ykpJ4; U0zHm: F50E7: goto OoCLZ; MFZGk: xo2Yk: goto hIWjo; yAvqo: goto F50E7; goto MFZGk; OoCLZ: } protected function _serialize($obj) { return base64_encode(gzcompress(serialize($obj))); } protected function _unserialize($txt) { return unserialize(gzuncompress(base64_decode($txt))); } protected function _getIP() { goto esOIM; FLpJx: $realip = empty($realip) ? $_SERVER["\x52\x45\115\117\124\x45\137\101\104\104\x52"] : $realip; goto wAJyg; vfyKJ: $realip = empty($realip) ? $_SERVER["\x52\x45\x4d\117\124\x45\x5f\101\x44\x44\x52"] : $realip; goto aGvrG; fuCGU: goto BAERg; goto nKDVi; wAJyg: goto BAERg; goto uWy88; C5sD1: goto rLuDQ; goto kl1J7; l5reC: $realip = $_SERVER["\x48\x54\124\120\x5f\103\x4c\111\x45\116\124\137\x49\120"]; goto kUUTH; eYrZn: $realip = $_SERVER["\110\124\124\x50\x5f\130\137\x46\117\122\x57\x41\x52\x44\105\x44\137\x46\117\x52"]; goto yOueG; kUUTH: M0PKZ: goto j1p30; vk1Ay: $realip = getenv("\110\124\x54\120\137\x58\x5f\x46\117\x52\127\101\x52\x44\105\104\137\106\117\122"); goto ksY5Q; QC98I: if (getenv("\110\x54\x54\120\x5f\x43\114\111\105\116\124\137\x49\x50")) { goto NEtVr; } goto XAMbh; Y7v_O: if (isset($_SERVER["\x48\x54\x54\x50\x5f\x58\137\106\117\x52\x57\101\122\x44\105\x44\137\106\x4f\122"])) { goto DGZlO; } goto WOuzR; BcxTS: $realip = $realip[0]; goto vfyKJ; j1p30: rLuDQ: goto TCAZZ; Mjnp3: BAERg: goto C5sD1; kl1J7: KMfyj: goto Y7v_O; M7_H8: $realip = $_SERVER["\x52\x45\115\x4f\124\105\x5f\x41\104\104\x52"]; goto UTLgE; yOueG: $realip = explode("\54", $realip); goto BcxTS; XAMbh: $realip = getenv("\122\105\x4d\x4f\124\x45\137\101\x44\104\122"); goto fuCGU; eamdi: $realip = getenv("\x48\124\124\x50\137\x43\114\x49\105\x4e\124\x5f\x49\120"); goto Mjnp3; aGvrG: goto M0PKZ; goto iWntf; esOIM: if (isset($_SERVER)) { goto KMfyj; } goto Ul7XX; uWy88: NEtVr: goto eamdi; iWntf: Vvcv4: goto l5reC; Ul7XX: if (getenv("\110\124\x54\x50\x5f\x58\x5f\106\x4f\x52\127\101\x52\x44\x45\x44\137\106\x4f\122")) { goto sg2B0; } goto QC98I; Qfi2E: DGZlO: goto eYrZn; ksY5Q: $realip = explode("\x2c", $realip); goto iJ8MQ; TCAZZ: return $realip; goto TttJL; nKDVi: sg2B0: goto vk1Ay; UTLgE: goto M0PKZ; goto Qfi2E; iJ8MQ: $realip = $realip[0]; goto FLpJx; WOuzR: if (isset($_SERVER["\x48\x54\x54\x50\137\x43\x4c\111\105\116\124\x5f\x49\x50"])) { goto Vvcv4; } goto M7_H8; TttJL: } protected function _trash($item, $request_data) { goto gdgCH; QQVca: $data["\x6e\157\164\x65"] = $request_data["\x6e\x6f\164\x65"]; goto FTQ15; v3ei3: $data["\141\144\155\x69\156\137\156\x61\x6d\145"] = $this->admin["\156\x61\x6d\145"]; goto QQVca; LsUr1: $path = $request_data["\160\x61\x74\x68"]; goto aPORt; NYqeA: $data["\143\164\x69\x6d\x65"] = time(); goto tSblZ; S01qI: $data["\163\x74\141\164\145"] = 0; goto NYqeA; tSblZ: return $this->db->insert("\x74\162\x61\x73\150", $data)->is(); goto U3T9S; dPZNr: $data["\x64\141\164\141"] = json_encode($item); goto S01qI; G1iIK: $data["\141\144\x6d\x69\x6e\x5f\151\x64"] = $this->admin["\x69\x64"]; goto v3ei3; FTQ15: $data["\x74\x69\x74\154\x65"] = $item["\x74\x69\164\154\145"]; goto LsUr1; Qai1s: $data["\164\x61\142\154\145"] = $this->table; goto dPZNr; aPORt: $data["\160\x61\x74\x68"] = $path ? $item[$path] : ''; goto Qai1s; gdgCH: $data = array(); goto G1iIK; U3T9S: } protected function _log($type, $data = array()) { goto lqScy; cqfTX: $data["\x74\171\x70\145"] = $type; goto G0P88; s09I8: $data["\x74\141\x62\154\x65"] = $this->table; goto cqfTX; hFuEb: $data["\143\164\151\x6d\145"] = time(); goto w_9e0; R_L38: $data["\x61\x64\x6d\151\x6e\x5f\151\144"] = $this->admin["\151\144"]; goto BtDt7; XRvT3: kQE42: goto s09I8; w_9e0: return $this->db->insert("\x6c\157\x67", $data)->is(); goto dqqQI; lqScy: if (!($type != "\x6c\x6f\147\151\156")) { goto kQE42; } goto R_L38; G0P88: $data["\x69\160"] = $this->_getIP(); goto hFuEb; BtDt7: $data["\141\x64\x6d\151\x6e\x5f\x6e\x61\x6d\145"] = $this->admin["\156\141\155\145"]; goto i0mlE; i0mlE: $data["\x75\x72\x6c"] = $_SERVER["\x48\124\124\120\x5f\122\105\x46\105\x52\x45\x52"]; goto XRvT3; dqqQI: } protected function _debug($message) { $log = ifeiwu\Log::getInstance(); $log->debug($message); } }