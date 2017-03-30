<?php

// function listing($userId)
// {
//     $pdo = connectDB();
//     if ($pdo) {
//         $sql = 'SELECT tasks.id AS taskId, tasks.description AS taskDescription, tasks.is_done AS taskIsDone 
// 			FROM tasks
// 			LEFT JOIN task_user ON tasks.id = task_user.task_id
// 			LEFT JOIN users ON task_user.user_id = users.id
// 			WHERE users.id = :userId
// 			ORDER BY description ASC';
//         try {
//             $pdoSt = $pdo->prepare($sql);
//             $pdoSt->execute([
//                 ':userId' => $_SESSION['userId']
//             ]);
//         } catch (PDOException $e) {
//             die('Quelque chose a posé problème lors de l’enregistrement');
//         }
//     } else {
//         die('Quelque chose a posé problème lors de l’enregistrement');
//     }
// }