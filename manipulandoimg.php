<?php

$imagem = "img.jpg";

list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize("nova_imagem.jpg");


// Imgem final
$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

// Imagem Original
$imagem_original = imagecreatefromjpeg("img.jpg");

// Marca d'agua
$nova_imagem = imagecreatefromjpeg("nova_imagem.jpg");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original  );

imagecopy($imagem_final, $nova_imagem, 400, 200, 0, 0, $largura_mini, $altura_mini);


//header("Content-Type: image/jpeg");
imagejpeg($imagem_final, "imagem_marca_dagua.jpg");

echo "imagem salvada com sucesso!"
?>