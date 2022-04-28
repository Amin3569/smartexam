

ALTER TABLE "tce_questions" ADD "question_position" Bigint NULL;
ALTER TABLE "tce_questions" ADD "question_timer" Smallint NULL;
ALTER TABLE "tce_questions" ADD "question_fullscreen" Boolean NOT NULL Default '0';
ALTER TABLE "tce_questions" ADD "question_inline_answers" Boolean NOT NULL DEFAULT '0';
ALTER TABLE "tce_questions" ADD "question_auto_next" Boolean NOT NULL DEFAULT '0';
ALTER TABLE "tce_answers" ADD "answer_keyboard_key" Smallint NULL;
ALTER TABLE "tce_tests" DROP "test_random_questions";
ALTER TABLE "tce_tests" ADD "test_score_wrong" Numeric(10,3) Default 0;
ALTER TABLE "tce_tests" ADD "test_score_unanswered" Numeric(10,3) Default 0;
ALTER TABLE "tce_tests" ADD "test_score_threshold" Numeric(10,3) Default 0;
ALTER TABLE "tce_tests" ADD "test_random_questions_select" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_random_questions_order" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_random_answers_select" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_random_answers_order" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_comment_enabled" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_menu_enabled" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_noanswer_enabled" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_mcma_radio" Boolean NOT NULL Default '1';
ALTER TABLE "tce_tests" ADD "test_report_to_users" Boolean NOT NULL Default '0';
ALTER TABLE "tce_tests" ALTER "test_score_right" Numeric(10,3) Default 1;
ALTER TABLE "tce_tests_logs_answers" ALTER "logansw_selected" Smallint NOT NULL Default -1;
ALTER TABLE "tce_tests_logs" ADD "testlog_reaction_time" Bigint NOT NULL Default 0;
ALTER TABLE "tce_tests_logs" ADD "testlog_order" Smallint NOT NULL Default 1;
ALTER TABLE "tce_tests_logs" ADD "testlog_num_answers" Smallint NOT NULL Default 0;
ALTER TABLE "tce_tests_logs" ADD "testlog_comment" Text;
