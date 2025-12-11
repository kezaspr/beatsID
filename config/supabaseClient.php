<?php

require 'vendor/autoload.php';

use Supabase\CreateClient;

$supabaseUrl = 'https://xoprpnzgbrrrhdboigbb.supabase.co';
$supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InhvcHJwbnpnYnJycmhkYm9pZ2JiIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjM5NzcxNTgsImV4cCI6MjA3OTU1MzE1OH0.acCEMhw3IC1nJeBHNbudH6mySgKkTlXniN_BwloOXIg';

$client = CreateClient::create($supabaseUrl, $supabaseKey);
