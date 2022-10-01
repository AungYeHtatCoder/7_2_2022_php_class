<?php 
 class Note
 {
  public function GetExamResultAllData()
    {
        $statement = $this->db->prepare("
            SELECT exam_results.*, programs.program_name, classes.class_name,
            classes.class_code,
            examintions.exam_name,
            students.student_name, tr_infos.tr_name
            FROM exam_results 
            LEFT JOIN programs ON exam_results.program_id = programs.id
            LEFT JOIN classes ON exam_results.class_id = classes.id
            LEFT JOIN students ON exam_results.student_id = students.id
            LEFT JOIN examintions ON exam_results.examination_id = examintions.id
            LEFT JOIN tr_infos ON exam_results.tr_infos_id = tr_infos.id
            
        ");
        $statement->execute();
        $row = $statement->fetchAll();
        return $row;
    }



    // get all data join program, class, examinations, students and tr_infos with total mark
    public function GetExamResultByStudent($student_id)
    {
        $sql = "SELECT 
        er.id,
        p.name AS program_name,
        s.name AS student_name,
        c.name AS class_name,
        c.code AS class_code,
        er.sub_myanmar,
        er.sub_english,
        er.sub_math,
        er.sub_science,
        er.sub_social,
        er.sub_religion,
        er.sub_art,
        er.sub_health,
        er.sub_myanmar + er.sub_english + er.sub_math + er.sub_science + er.sub_social + er.sub_religion + er.sub_art + er.sub_health AS total_mark
        FROM exam_results AS er
        INNER JOIN programs AS p ON er.program_id = p.id
        INNER JOIN students AS s ON er.student_id = s.id
        INNER JOIN classes AS c ON er.class_id = c.id
        WHERE er.student_id = :student_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }
   

    /*
SELECT exam_results.*, programs.program_name, students.student_name, classes.class_name, classes.class_code, examintions.exam_name, 
            tr_infos.tr_name FROM exam_results 
            LEFT JOIN programs ON exam_results.program_id = programs.id
            LEFT JOIN students ON exam_results.student_id = students.id
            LEFT JOIN classes ON exam_results.class_id = classes.id
            LEFT JOIN examintions ON exam_results.examination_id = examintions.id
            LEFT JOIN tr_infos ON exam_results.tr_infos_id = tr_infos.id
            WHERE exam_results.id = :id


    */
 }