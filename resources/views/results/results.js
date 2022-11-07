        var ca_1 = document.getElementById('s1_ca1')
        var ca_2 = document.getElementById('s1_ca2')
        var project_score = document.getElementById('s1_pjkt')
        var exam_score = document.getElementById('s1_exam')
        var over_sub1 = document.getElementById('s1_overall')
        var grade_sub1 = document.getElementById('s1_grade')

        function calcOverall()
        {

            var overall_score = (parseInt(ca_1.value) + parseInt(ca_2.value) + parseInt(project_score.value) + parseInt(exam_score.value))
            over_sub1.value = overall_score
            if (overall_score >79) {
                grade_sub1.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub1.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub1.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub1.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub1.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub1.value = "F"
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

        function calcOverall2()
        {

            var overall_score = (parseInt(ca_21.value) + parseInt(ca_22.value) + parseInt(project_score2.value) + parseInt(exam_score2.value))
            over_sub2.value = overall_score
            
            if (overall_score >79) {
                grade_sub2.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub2.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub2.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub2.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub2.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub2.value = "F"
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

        function calcOverall3()
        {

            var overall_score = (parseInt(ca_31.value) + parseInt(ca_32.value) + parseInt(project_score3.value) + parseInt(exam_score3.value))
            over_sub3.value = overall_score
            
            if (overall_score >79) {
                grade_sub3.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub3.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub3.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub3.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub3.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub3.value = "F"
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

        function calcOverall4()
        {

            var overall_score = (parseInt(ca_41.value) + parseInt(ca_42.value) + parseInt(project_score4.value) + parseInt(exam_score4.value))
            over_sub4.value = overall_score
            
            if (overall_score >79) {
                grade_sub4.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub4.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub4.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub4.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub4.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub4.value = "F"
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

        function calcOverall5()
        {

            var overall_score = (parseInt(ca_51.value) + parseInt(ca_52.value) + parseInt(project_score5.value) + parseInt(exam_score5.value))
            over_sub5.value = overall_score
            
            if (overall_score >79) {
                grade_sub5.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub5.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub5.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub5.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub5.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub5.value = "F"
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

        function calcOverall6()
        {

            var overall_score = (parseInt(ca_61.value) + parseInt(ca_62.value) + parseInt(project_score6.value) + parseInt(exam_score6.value))
            over_sub6.value = overall_score
            
            if (overall_score >79) {
                grade_sub6.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub6.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub6.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub6.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub6.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub6.value = "F"
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

        function calcOverall7()
        {

            var overall_score = (parseInt(ca_71.value) + parseInt(ca_72.value) + parseInt(project_score7.value) + parseInt(exam_score7.value))
            over_sub7.value = overall_score
            
            if (overall_score >79) {
                grade_sub7.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub7.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub7.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub7.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub7.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub7.value = "F"
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

        function calcOverall8()
        {

            var overall_score = (parseInt(ca_81.value) + parseInt(ca_82.value) + parseInt(project_score8.value) + parseInt(exam_score8.value))
            over_sub8.value = overall_score
            
            if (overall_score >79) {
                grade_sub8.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub8.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub8.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub8.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub8.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub8.value = "F"
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
        var over_sub9 = document.getElementById('overall8')
        var grade_sub9 = document.getElementById('s9_grade')

        function calcOverall9()
        {

            var overall_score = (parseInt(ca_91.value) + parseInt(ca_92.value) + parseInt(project_score9.value) + parseInt(exam_score9.value))
            over_sub9.value = overall_score
            
            if (overall_score >79) {
                grade_sub9.value = "A"
            }else{
                if (overall_score<80 && overall_score >69) {
                    grade_sub9.value = "B"
                }else{
                    if (overall_score<70 && overall_score >59) {
                        grade_sub9.value = "C"
                    }else{
                        if (overall_score<60 && overall_score >49) {
                            grade_sub9.value = "D"
                        }else{
                            if (overall_score<50 && overall_score >39) {
                                grade_sub9.value = "E"
                            }else{
                                if (overall_score<40) {
                                    grade_sub9.value = "F"
                                }
                            }
                        }
                    }
                }
            } 
            

        }