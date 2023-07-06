<?php
class login
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function ValidarCredenciales($data)
    {
        $correo = $data['Correo'];
        $contraseña = $data['Contraseña'];
        try {
            $strSql = "SELECT * FROM usuario WHERE correo='" . $correo . "' AND contrasena='" . $contraseña . "'";
            $query = $this->pdo->select($strSql);
            if(isset($query[0])){
                $_SESSION['user'] = $query[0];
            }
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function sendpassword($dataUser)
    {

        try {
            $nombre = $dataUser['name'];
            $correo = $dataUser['correo'];

            $longitud = 8;
            $pass = substr(md5(rand()), 0, $longitud);


            $url = 'https://graph.microsoft.com/v1.0/me/sendMail';
            $accessToken = 'EwB4A8l6BAAUAOyDv0l6PcCVu89kmzvqZmkWABkAASYL8yi3qILJltEfbuyv6RVNB4Rfplh9ltzjDlRyQRrZe/qKzRZlyGNrCnliqwCPoIHvUx9mvyt5b9GSezBpHOEquy2S3Q5vPhI0QFP7gfQC1Iev/EPTIGEw3flNWm87yVk6fUIAdj4E5XZjkr2CzxLHfgTYxrW22lbeUPZwd4WvTc3kvpkAKTZ1CKBKAGePAWd8XQ4NFfBxLi6XD5SmBC1QIc7kDQrZnJUdSUNmHKVqTj64W5wGCy4fullYl9diLrgmFihqqqBPVyAhAN39YVGu5EIQ2oXqNCDZRznYCU4336TNSFfbcWdpZhrH/9s3XuzzR9XJ51aTqJQmE7ujuCQDZgAACI0TlihnZWx6SAJY+HZL2jZZwegYU2xUEfiQWrMf0ad/WoEnKaY+JDHSxL+L/DYIi8d0G62fhV7Z4fAvO/3WdDLzR2VkE7wXnKncB80qpTavzE2LT8b+r7H88yu/OAE9zJllAmZcqNnSa5iJIDs6DcOEPF2Ug1HivhhcwVXoDqyuOOoVKIAbqbYxCftxRfspM5obgSFHYMaS/vMzsLa3v2T9PeK5ilDGteTEWTEGPl6e2q2x4fSkHf5IukAPfJt6R5EF810A5XC2IxkXIHX1G4zP5kORVH1rYAa9MUld9JWSS8JxolVyR2rTUN2G+H9JWpOYNoCxVmfdm+pKnAtWeyx667bwHQ2FylFT9o0LivXdSMW9n0E+uL8KDbYP/HRSATUqCqDjR5XqcITrYvdqmzyPwT+B0w/GOBRxE0k3carhyTcRtR3LoUdrXrF80lK0a04x3BevVvnXTczyQw5rN5yuTBwYcT127mwiquZm+o7RZPwrcq2OgUJbzlw8zWr2de1HhY5H5dWEj23VBZlX4XNTqT35ZhFXA4SOTnd4bI+jD78qWWuz0ZxLFI2EQ9lhNL2PLE5+c3bmLcFOmAscwpxqbLhXovvg+YX0CK/t7qsvoz2YwZMGlpfUI6EqIZwlD7yuNl2JCnnIo+a4OSgaQzvaAwatjva9rhMen6cuoNPjg9y223kK7Rg1PHb8r7qItaR7sAEbw2ChY2NJyT+QXj3laJKm+b0h9ZIXi187PiAhK/TI/uq4IpV3gs+A8UUOL1YFTqGla2FElYUyOEWT11T3LI0C';

            $data = [
                'message' => [
                    'subject' => 'Cambio de clave',
                    'body' => [
                        'contentType' => 'HTML',
                        'content' => "<!DOCTYPE html><html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width,initial-scale=1'></head><body><style type='text/css'>.left{float:center;width:125px;text-align:right;margin-top:10px;margin-right:200px;display:inline}.right{float:left;text-align:center;margin-top:5px;display:inline}</style><table style='border:0 solid #000;width:100%'><thead><tr><td style='text-align:center;background-color:#fff;color:#000;height:100px' colspan='2'><div class='left'></div><div class='right'><center><img src='http://drive.google.com/uc?export=view&id=1qmD9jjDqRJe8KVD2rPrnkIbtRtOk7b-V' style='height:90px;width:90px;padding-left:50px'></div></td></tr><tr><td style='text-align:left' colspan='4'><span style='font-size:25px'><span style='font-size:25px'><p><br><b>Hola ".$nombre."</b>, Desde el equipo del Colegio San José de Cafasso queremos decirte que estamos contigo en las buenas y en las malas para hacertelas mejores... Si tu no has solicitado este cambio de contraseña por favor comunicate con tu administrador.<br>Estamos contigo,<br><br><br><span style='color:#222'><strong>By:Colegio Cafasso</strong></span></td></p></tr><td style='text-align:center;background-color:#078907;color:#fff' colspan='2'><h2><b>Tu nueva clave es: ".$pass."</b></h2></td></thead></table></body></html>"
                    ],
                    'toRecipients' => [
                        [
                            'emailAddress' => [
                                'address' => $correo
                            ]
                        ]
                    ]
                ]
            ];

            $data_string = json_encode($data);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $accessToken
            )
            );

            curl_exec($ch);

            curl_close($ch);
            return $pass;

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function updatePassword($email,$newPass)
    {

        try {
            $strWhere = 'correo = "'. $email.'"';
            $data['contrasena'] = $newPass;
            $this->pdo->update('usuario',$data, $strWhere);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }


}