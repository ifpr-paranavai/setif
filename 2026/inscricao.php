<?php
// A home da SETIF 2026 passou a ser servida na raiz do site (/setif/).
// Mantido para não quebrar links/QR codes já publicados apontando para esta rota.
header('Location: /setif/#inscricoes');
exit();
