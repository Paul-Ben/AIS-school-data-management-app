
        var ca_1 = document.getElementById('s1_ca1')
        var ca_2 = document.getElementById('s1_ca2')
        var project_score = document.getElementById('s1_pjkt')
        var exam_score = document.getElementById('s1_exam')
        var over_sub1 = document.getElementById('s1_overall')
        var grade_sub1 = document.getElementById('s1_grade')
        var remarks_sub1 = document.getElementById('sub1_rmks')

        function calcOverall()
        {

            
            if (ca_1.value > 10)
            {
                ca_1.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_2.value>10)
            {
                ca_2.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score.value>10)
            {
                project_score.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score.value>70)
            {
                exam_score.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }


            var overall_score = (parseInt(ca_1.value) + parseInt(ca_2.value) + parseInt(project_score.value) + parseInt(exam_score.value))
            over_sub1.value = overall_score



            if (overall_score >79) {
                grade_sub1.value = "A"
                remarks_sub1.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub1.value = "B"
                    remarks_sub1.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub1.value = "C"
                        remarks_sub1.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub1.value = "D"
                            remarks_sub1.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub1.value = "E"
                                remarks_sub1.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub1.value = "F"
                                    remarks_sub1.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            
        }

        var ca_21 = document.getElementById('s2_ca1')
        var ca_22 = document.getElementById('s2_ca2')
        var project_score2 = document.getElementById('s2_pjkt')
        var exam_score2 = document.getElementById('s2_exam')
        var over_sub2 = document.getElementById('overall2')
        var grade_sub2 = document.getElementById('s2_grade')
        var remarks_sub2 = document.getElementById('sub2_rmks')

        function calcOverall2()
        {
            if (ca_21.value > 10)
            {
                ca_21.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_22.value>10)
            {
                ca_22.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score2.value>10)
            {
                project_score.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score2.value>70)
            {
                exam_score2.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }

            var overall_score = (parseInt(ca_21.value) + parseInt(ca_22.value) + parseInt(project_score2.value) + parseInt(exam_score2.value))
            over_sub2.value = overall_score
            
            if (overall_score >79) {
                grade_sub2.value = "A"
                remarks_sub2.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub2.value = "B"
                    remarks_sub2.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub2.value = "C"
                        remarks_sub2.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub2.value = "D"
                            remarks_sub2.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub2.value = "E"
                                remarks_sub2.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub2.value = "F"
                                    remarks_sub2.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }

        var ca_31 = document.getElementById('s3_ca1')
        var ca_32 = document.getElementById('s3_ca2')
        var project_score3 = document.getElementById('s3_pjkt')
        var exam_score3 = document.getElementById('s3_exam')
        var over_sub3 = document.getElementById('overall3')
        var grade_sub3 = document.getElementById('s3_grade')
        var remarks_sub3 = document.getElementById('sub3_rmks')

        function calcOverall3()
        {
            if (ca_31.value > 10)
            {
                ca_31.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_32.value>10)
            {
                ca_32.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score3.value>10)
            {
                project_score3.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score3.value>70)
            {
                exam_score3.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }

            var overall_score = (parseInt(ca_31.value) + parseInt(ca_32.value) + parseInt(project_score3.value) + parseInt(exam_score3.value))
            over_sub3.value = overall_score
            
            if (overall_score >79) {
                grade_sub3.value = "A"
                remarks_sub3.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub3.value = "B"
                    remarks_sub3.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub3.value = "C"
                        remarks_sub3.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub3.value = "D"
                            remarks_sub3.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub3.value = "E"
                                remarks_sub3.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub3.value = "F"
                                    remarks_sub3.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }

        var ca_41 = document.getElementById('s4_ca1')
        var ca_42 = document.getElementById('s4_ca2')
        var project_score4 = document.getElementById('s4_pjkt')
        var exam_score4 = document.getElementById('s4_exam')
        var over_sub4 = document.getElementById('overall4')
        var grade_sub4 = document.getElementById('s4_grade')
        var remarks_sub4 = document.getElementById('sub4_rmks')

        function calcOverall4()
        {

            if (ca_41.value > 10)
            {
                ca_41.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_42.value>10)
            {
                ca_42.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score4.value>10)
            {
                project_score4.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score4.value>70)
            {
                exam_score4.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }

            var overall_score = (parseInt(ca_41.value) + parseInt(ca_42.value) + parseInt(project_score4.value) + parseInt(exam_score4.value))
            over_sub4.value = overall_score
            
            if (overall_score >79) {
                grade_sub4.value = "A"
                remarks_sub4.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub4.value = "B"
                    remarks_sub4.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub4.value = "C"
                        remarks_sub4.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub4.value = "D"
                            remarks_sub4.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub4.value = "E"
                                remarks_sub4.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub4.value = "F"
                                    remarks_sub4.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }

        var ca_51 = document.getElementById('s5_ca1')
        var ca_52 = document.getElementById('s5_ca2')
        var project_score5 = document.getElementById('s5_pjkt')
        var exam_score5 = document.getElementById('s5_exam')
        var over_sub5 = document.getElementById('overall5')
        var grade_sub5 = document.getElementById('s5_grade')
        var remarks_sub5 = document.getElementById('sub5_rmks')

        function calcOverall5()
        {
            if (ca_51.value > 10)
            {
                ca_51.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_52.value>10)
            {
                ca_52.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score5.value>10)
            {
                project_score5.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score5.value>70)
            {
                exam_score5.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }

            var overall_score = (parseInt(ca_51.value) + parseInt(ca_52.value) + parseInt(project_score5.value) + parseInt(exam_score5.value))
            over_sub5.value = overall_score
            
            if (overall_score >79) {
                grade_sub5.value = "A"
                remarks_sub5.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub5.value = "B"
                    remarks_sub5.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub5.value = "C"
                        remarks_sub5.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub5.value = "D"
                            remarks_sub5.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub5.value = "E"
                                remarks_sub5.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub5.value = "F"
                                    remarks_sub5.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }

        var ca_61 = document.getElementById('s6_ca1')
        var ca_62 = document.getElementById('s6_ca2')
        var project_score6 = document.getElementById('s6_pjkt')
        var exam_score6 = document.getElementById('s6_exam')
        var over_sub6 = document.getElementById('overall6')
        var grade_sub6 = document.getElementById('s6_grade')
        var remarks_sub6 = document.getElementById('sub6_rmks')

        function calcOverall6()
        {
            if (ca_61.value > 10)
            {
                ca_61.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_62.value>10)
            {
                ca_62.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score6.value>10)
            {
                project_score6.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score6.value>70)
            {
                exam_score6.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }

            var overall_score = (parseInt(ca_61.value) + parseInt(ca_62.value) + parseInt(project_score6.value) + parseInt(exam_score6.value))
            over_sub6.value = overall_score
            
            if (overall_score >79) {
                grade_sub6.value = "A"
                remarks_sub6.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub6.value = "B"
                    remarks_sub6.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub6.value = "C"
                        remarks_sub6.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub6.value = "D"
                            remarks_sub6.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub6.value = "E"
                                remarks_sub6.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub6.value = "F"
                                    remarks_sub6.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }

        var ca_71 = document.getElementById('s7_ca1')
        var ca_72 = document.getElementById('s7_ca2')
        var project_score7 = document.getElementById('s7_pjkt')
        var exam_score7 = document.getElementById('s7_exam')
        var over_sub7 = document.getElementById('overall7')
        var grade_sub7 = document.getElementById('s7_grade')
        var remarks_sub7 = document.getElementById('sub7_rmks')

        function calcOverall7()
        {
            if (ca_71.value > 10)
            {
                ca_71.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_72.value>10)
            {
                ca_72.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score7.value>10)
            {
                project_score7.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score7.value>70)
            {
                exam_score7.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }


            var overall_score = (parseInt(ca_71.value) + parseInt(ca_72.value) + parseInt(project_score7.value) + parseInt(exam_score7.value))
            over_sub7.value = overall_score
            
            if (overall_score >79) {
                grade_sub7.value = "A"
                remarks_sub7.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub7.value = "B"
                    remarks_sub7.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub7.value = "C"
                        remarks_sub7.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub7.value = "D"
                            remarks_sub7.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub7.value = "E"
                                remarks_sub7.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub7.value = "F"
                                    remarks_sub7.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }

        var ca_81 = document.getElementById('s8_ca1')
        var ca_82 = document.getElementById('s8_ca2')
        var project_score8 = document.getElementById('s8_pjkt')
        var exam_score8 = document.getElementById('s8_exam')
        var over_sub8 = document.getElementById('overall8')
        var grade_sub8 = document.getElementById('s8_grade')
        var remarks_sub8 = document.getElementById('sub8_rmks')

        function calcOverall8()
        {
            if (ca_81.value > 10)
            {
                ca_81.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_82.value>10)
            {
                ca_82.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score8.value>10)
            {
                project_score8.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score8.value>70)
            {
                exam_score8.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }

            var overall_score = (parseInt(ca_81.value) + parseInt(ca_82.value) + parseInt(project_score8.value) + parseInt(exam_score8.value))
            over_sub8.value = overall_score
            
            if (overall_score >79) {
                grade_sub8.value = "A"
                remarks_sub8.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub8.value = "B"
                    remarks_sub8.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub8.value = "C"
                        remarks_sub8.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub8.value = "D"
                            remarks_sub8.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub8.value = "E"
                                remarks_sub8.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub8.value = "F"
                                    remarks_sub8.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }

        var ca_91 = document.getElementById('s9_ca1')
        var ca_92 = document.getElementById('s9_ca2')
        var project_score9 = document.getElementById('s9_pjkt')
        var exam_score9 = document.getElementById('s9_exam')
        var over_sub9 = document.getElementById('overall9')
        var grade_sub9 = document.getElementById('s9_grade')
        var remarks_sub9 = document.getElementById('sub9_rmks')

        function calcOverall9()
        {
            if (ca_91.value > 10)
            {
                ca_91.value = "0"
                alert('1st CA value is higher than 10')
            }
            if (ca_92.value>10)
            {
                ca_92.value = "0"
                alert('2nd CA value higher than 10. it should be less than or equal to 10')
            }
            if (project_score9.value>10)
            {
                project_score9.value = "0"
                alert('Project value higher than 10. it should be less than or equal to 10')
            }
            if (exam_score9.value>70)
            {
                exam_score9.value = "0"
                alert('Exam value higher than 70. it should be less than or equal to 70')
            }

            var overall_score = (parseInt(ca_91.value) + parseInt(ca_92.value) + parseInt(project_score9.value) + parseInt(exam_score9.value))
            over_sub9.value = overall_score
            
            if (overall_score >79) {
                grade_sub9.value = "A"
                remarks_sub9.value = "Excellent"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub9.value = "B"
                    remarks_sub9.value = "Very Good"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub9.value = "C"
                        remarks_sub9.value = "Good"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub9.value = "D"
                            remarks_sub9.value = "Fair"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub9.value = "E"
                                remarks_sub9.value = "Poor"
                            }else{
                                if (overall_score<40) {
                                    grade_sub9.value = "F"
                                    remarks_sub9.value = "Fail"
                                }
                            }
                        }
                    }
                }
            } 
            

        }
        

    