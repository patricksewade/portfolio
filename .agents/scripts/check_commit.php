<?php
// .agents/scripts/check_commit.php

$stdin = file_get_contents("php://stdin");
$data = json_decode($stdin, true);

$response = ["decision" => "allow"];

if (isset($data['toolCall']['name']) && $data['toolCall']['name'] === 'run_command') {
    $commandLine = $data['toolCall']['args']['CommandLine'] ?? '';
    
    // Check if it's a git commit with -m
    if (preg_match('/git\s+commit[^\'"]*[\'"]([^\'"]+)[\'"]/', $commandLine, $matches)) {
        $commitMessage = $matches[1];
        
        // Conventional Commits regex
        $regex = '/^(feat|fix|refactor|perf|style|docs|test|chore)(\([a-zA-Z0-9\-_]+\))?:\s[a-z0-9].*/';
        
        if (!preg_match($regex, $commitMessage)) {
            $response = [
                "decision" => "deny",
                "reason" => "Règle de Conventional Commits non respectée. Format exigé: 'type(scope): description' (ex: 'feat: ajout du login'). Le message doit être en minuscules et utiliser un type autorisé (feat, fix, refactor, perf, style, docs, test, chore)."
            ];
        }
    }
}

echo json_encode($response);
