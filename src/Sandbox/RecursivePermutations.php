<?php
function getPermutations(string $s): array
{
    if (strlen($s) == 1) {
        return [$s];
    }

    $allCharsWithoutLast = substr($s, 0, -1);
    $lastChar = $s[strlen($s) -1];

    $permutationsWithoutLastChar = getPermutations($allCharsWithoutLast);

    $permutations = [];

    foreach ($permutationsWithoutLastChar as $pwlc) {
        for ($i = 0; $i <= strlen($allCharsWithoutLast); $i++) {
            $permutations[] = substr($pwlc, 0, $i) . $lastChar . substr($pwlc, $i);
        }
    }

    return $permutations;
}


print_r(getPermutations('cat'));