<?php
// This file was auto-generated from sdk-root/src/data/transcribe/2017-10-26/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Operations and objects for transcribing speech to text.</p>', 'operations' => [ 'CreateVocabulary' => '<p>Creates a new custom vocabulary that you can use to change the way Amazon Transcribe handles transcription of an audio file. </p>', 'DeleteTranscriptionJob' => '<p>Deletes a previously submitted transcription job along with any other generated results such as the transcription, models, and so on.</p>', 'DeleteVocabulary' => '<p>Deletes a vocabulary from Amazon Transcribe. </p>', 'GetTranscriptionJob' => '<p>Returns information about a transcription job. To see the status of the job, check the <code>TranscriptionJobStatus</code> field. If the status is <code>COMPLETED</code>, the job is finished and you can find the results at the location specified in the <code>TranscriptionFileUri</code> field.</p>', 'GetVocabulary' => '<p>Gets information about a vocabulary. </p>', 'ListTranscriptionJobs' => '<p>Lists transcription jobs with the specified status.</p>', 'ListVocabularies' => '<p>Returns a list of vocabularies that match the specified criteria. If no criteria are specified, returns the entire list of vocabularies.</p>', 'StartTranscriptionJob' => '<p>Starts an asynchronous job to transcribe speech to text. </p>', 'UpdateVocabulary' => '<p>Updates an existing vocabulary with new values. The <code>UpdateVocabulary</code> operation overwrites all of the existing information with the values that you provide in the request. </p>', ], 'shapes' => [ 'BadRequestException' => [ 'base' => '<p>Your request didn\'t pass one or more validation tests. For example, if the transcription you\'re trying to delete doesn\'t exist or if it is in a non-terminal state (for example, it\'s "in progress"). See the exception <code>Message</code> field for more information.</p>', 'refs' => [], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'Settings$ShowSpeakerLabels' => '<p>Determines whether the transcription job uses speaker recognition to identify different speakers in the input audio. Speaker recognition labels individual speakers in the audio file. If you set the <code>ShowSpeakerLabels</code> field to true, you must also set the maximum number of speaker labels <code>MaxSpeakerLabels</code> field.</p> <p>You can\'t set both <code>ShowSpeakerLabels</code> and <code>ChannelIdentification</code> in the same request. If you set both, your request returns a <code>BadRequestException</code>.</p>', 'Settings$ChannelIdentification' => '<p>Instructs Amazon Transcribe to process each audio channel separately and then merge the transcription output of each channel into a single transcription. </p> <p>Amazon Transcribe also produces a transcription of each item detected on an audio channel, including the start time and end time of the item and alternative transcriptions of the item including the confidence that Amazon Transcribe has in the transcription.</p> <p>You can\'t set both <code>ShowSpeakerLabels</code> and <code>ChannelIdentification</code> in the same request. If you set both, your request returns a <code>BadRequestException</code>.</p>', ], ], 'ConflictException' => [ 'base' => '<p>When you are using the <code>StartTranscriptionJob</code> operation, the <code>JobName</code> field is a duplicate of a previously entered job name. Resend your request with a different name.</p> <p>When you are using the <code>UpdateVocabulary</code> operation, there are two jobs running at the same time. Resend the second request later.</p>', 'refs' => [], ], 'CreateVocabularyRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateVocabularyResponse' => [ 'base' => NULL, 'refs' => [], ], 'DateTime' => [ 'base' => NULL, 'refs' => [ 'CreateVocabularyResponse$LastModifiedTime' => '<p>The date and time that the vocabulary was created.</p>', 'GetVocabularyResponse$LastModifiedTime' => '<p>The date and time that the vocabulary was last modified.</p>', 'TranscriptionJob$CreationTime' => '<p>A timestamp that shows when the job was created.</p>', 'TranscriptionJob$CompletionTime' => '<p>A timestamp that shows when the job was completed.</p>', 'TranscriptionJobSummary$CreationTime' => '<p>A timestamp that shows when the job was created.</p>', 'TranscriptionJobSummary$CompletionTime' => '<p>A timestamp that shows when the job was completed.</p>', 'UpdateVocabularyResponse$LastModifiedTime' => '<p>The date and time that the vocabulary was updated.</p>', 'VocabularyInfo$LastModifiedTime' => '<p>The date and time that the vocabulary was last modified.</p>', ], ], 'DeleteTranscriptionJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteVocabularyRequest' => [ 'base' => NULL, 'refs' => [], ], 'FailureReason' => [ 'base' => NULL, 'refs' => [ 'BadRequestException$Message' => NULL, 'CreateVocabularyResponse$FailureReason' => '<p>If the <code>VocabularyState</code> field is <code>FAILED</code>, this field contains information about why the job failed.</p>', 'GetVocabularyResponse$FailureReason' => '<p>If the <code>VocabularyState</code> field is <code>FAILED</code>, this field contains information about why the job failed.</p>', 'TranscriptionJob$FailureReason' => '<p>If the <code>TranscriptionJobStatus</code> field is <code>FAILED</code>, this field contains information about why the job failed.</p> <p>The <code>FailureReason</code> field can contain one of the following values:</p> <ul> <li> <p> <code>Unsupported media format</code> - The media format specified in the <code>MediaFormat</code> field of the request isn\'t valid. See the description of the <code>MediaFormat</code> field for a list of valid values.</p> </li> <li> <p> <code>The media format provided does not match the detected media format</code> - The media format of the audio file doesn\'t match the format specified in the <code>MediaFormat</code> field in the request. Check the media format of your media file and make sure that the two values match.</p> </li> <li> <p> <code>Invalid sample rate for audio file</code> - The sample rate specified in the <code>MediaSampleRateHertz</code> of the request isn\'t valid. The sample rate must be between 8000 and 48000 Hertz.</p> </li> <li> <p> <code>The sample rate provided does not match the detected sample rate</code> - The sample rate in the audio file doesn\'t match the sample rate specified in the <code>MediaSampleRateHertz</code> field in the request. Check the sample rate of your media file and make sure that the two values match.</p> </li> <li> <p> <code>Invalid file size: file size too large</code> - The size of your audio file is larger than Amazon Transcribe can process. For more information, see <a href="https://docs.aws.amazon.com/transcribe/latest/dg/limits-guidelines.html#limits">Limits</a> in the <i>Amazon Transcribe Developer Guide</i>.</p> </li> <li> <p> <code>Invalid number of channels: number of channels too large</code> - Your audio contains more channels than Amazon Transcribe is configured to process. To request additional channels, see <a href="https://docs.aws.amazon.com/general/latest/gr/aws_service_limits.html#limits-amazon-transcribe">Amazon Transcribe Limits</a> in the <i>Amazon Web Services General Reference</i>.</p> </li> </ul>', 'TranscriptionJobSummary$FailureReason' => '<p>If the <code>TranscriptionJobStatus</code> field is <code>FAILED</code>, a description of the error.</p>', ], ], 'GetTranscriptionJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTranscriptionJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetVocabularyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetVocabularyResponse' => [ 'base' => NULL, 'refs' => [], ], 'InternalFailureException' => [ 'base' => '<p>There was an internal error. Check the error message and try your request again.</p>', 'refs' => [], ], 'LanguageCode' => [ 'base' => NULL, 'refs' => [ 'CreateVocabularyRequest$LanguageCode' => '<p>The language code of the vocabulary entries.</p>', 'CreateVocabularyResponse$LanguageCode' => '<p>The language code of the vocabulary entries.</p>', 'GetVocabularyResponse$LanguageCode' => '<p>The language code of the vocabulary entries.</p>', 'StartTranscriptionJobRequest$LanguageCode' => '<p>The language code for the language used in the input media file.</p>', 'TranscriptionJob$LanguageCode' => '<p>The language code for the input speech.</p>', 'TranscriptionJobSummary$LanguageCode' => '<p>The language code for the input speech.</p>', 'UpdateVocabularyRequest$LanguageCode' => '<p>The language code of the vocabulary entries.</p>', 'UpdateVocabularyResponse$LanguageCode' => '<p>The language code of the vocabulary entries.</p>', 'VocabularyInfo$LanguageCode' => '<p>The language code of the vocabulary entries.</p>', ], ], 'LimitExceededException' => [ 'base' => '<p>Either you have sent too many requests or your input file is too long. Wait before you resend your request, or use a smaller file and resend the request.</p>', 'refs' => [], ], 'ListTranscriptionJobsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTranscriptionJobsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListVocabulariesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListVocabulariesResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListTranscriptionJobsRequest$MaxResults' => '<p>The maximum number of jobs to return in the response. If there are fewer results in the list, this response contains only the actual results.</p>', 'ListVocabulariesRequest$MaxResults' => '<p>The maximum number of vocabularies to return in the response. If there are fewer results in the list, this response contains only the actual results.</p>', ], ], 'MaxSpeakers' => [ 'base' => NULL, 'refs' => [ 'Settings$MaxSpeakerLabels' => '<p>The maximum number of speakers to identify in the input audio. If there are more speakers in the audio than this number, multiple speakers will be identified as a single speaker. If you specify the <code>MaxSpeakerLabels</code> field, you must set the <code>ShowSpeakerLabels</code> field to true.</p>', ], ], 'Media' => [ 'base' => '<p>Describes the input media file in a transcription request.</p>', 'refs' => [ 'StartTranscriptionJobRequest$Media' => '<p>An object that describes the input media for a transcription job.</p>', 'TranscriptionJob$Media' => '<p>An object that describes the input media for the transcription job.</p>', ], ], 'MediaFormat' => [ 'base' => NULL, 'refs' => [ 'StartTranscriptionJobRequest$MediaFormat' => '<p>The format of the input media file.</p>', 'TranscriptionJob$MediaFormat' => '<p>The format of the input media file.</p>', ], ], 'MediaSampleRateHertz' => [ 'base' => NULL, 'refs' => [ 'StartTranscriptionJobRequest$MediaSampleRateHertz' => '<p>The sample rate, in Hertz, of the audio track in the input media file. </p>', 'TranscriptionJob$MediaSampleRateHertz' => '<p>The sample rate, in Hertz, of the audio track in the input media file. </p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListTranscriptionJobsRequest$NextToken' => '<p>If the result of the previous request to <code>ListTranscriptionJobs</code> was truncated, include the <code>NextToken</code> to fetch the next set of jobs.</p>', 'ListTranscriptionJobsResponse$NextToken' => '<p>The <code>ListTranscriptionJobs</code> operation returns a page of jobs at a time. The maximum size of the page is set by the <code>MaxResults</code> parameter. If there are more jobs in the list than the page size, Amazon Transcribe returns the <code>NextPage</code> token. Include the token in the next request to the <code>ListTranscriptionJobs</code> operation to return in the next page of jobs.</p>', 'ListVocabulariesRequest$NextToken' => '<p>If the result of the previous request to <code>ListVocabularies</code> was truncated, include the <code>NextToken</code> to fetch the next set of jobs.</p>', 'ListVocabulariesResponse$NextToken' => '<p>The <code>ListVocabularies</code> operation returns a page of vocabularies at a time. The maximum size of the page is set by the <code>MaxResults</code> parameter. If there are more jobs in the list than the page size, Amazon Transcribe returns the <code>NextPage</code> token. Include the token in the next request to the <code>ListVocabularies</code> operation to return in the next page of jobs.</p>', ], ], 'NotFoundException' => [ 'base' => '<p>We can\'t find the requested resource. Check the name and try your request again.</p>', 'refs' => [], ], 'OutputBucketName' => [ 'base' => NULL, 'refs' => [ 'StartTranscriptionJobRequest$OutputBucketName' => '<p>The location where the transcription is stored.</p> <p>If you set the <code>OutputBucketName</code>, Amazon Transcribe puts the transcription in the specified S3 bucket. When you call the <a>GetTranscriptionJob</a> operation, the operation returns this location in the <code>TranscriptFileUri</code> field. The S3 bucket must have permissions that allow Amazon Transcribe to put files in the bucket. For more information, see <a href="https://docs.aws.amazon.com/transcribe/latest/dg/access-control-managing-permissions.html#auth-role-iam-user">Permissions Required for IAM User Roles</a>.</p> <p>Amazon Transcribe uses the default Amazon S3 key for server-side encryption of transcripts that are placed in your S3 bucket. You can\'t specify your own encryption key.</p> <p>If you don\'t set the <code>OutputBucketName</code>, Amazon Transcribe generates a pre-signed URL, a shareable URL that provides secure access to your transcription, and returns it in the <code>TranscriptFileUri</code> field. Use this URL to download the transcription.</p>', ], ], 'OutputLocationType' => [ 'base' => NULL, 'refs' => [ 'TranscriptionJobSummary$OutputLocationType' => '<p>Indicates the location of the output of the transcription job.</p> <p>If the value is <code>CUSTOMER_BUCKET</code> then the location is the S3 bucket specified in the <code>outputBucketName</code> field when the transcription job was started with the <code>StartTranscriptionJob</code> operation.</p> <p>If the value is <code>SERVICE_BUCKET</code> then the output is stored by Amazon Transcribe and can be retrieved using the URI in the <code>GetTranscriptionJob</code> response\'s <code>TranscriptFileUri</code> field.</p>', ], ], 'Phrase' => [ 'base' => NULL, 'refs' => [ 'Phrases$member' => NULL, ], ], 'Phrases' => [ 'base' => NULL, 'refs' => [ 'CreateVocabularyRequest$Phrases' => '<p>An array of strings that contains the vocabulary entries. </p>', 'UpdateVocabularyRequest$Phrases' => '<p>An array of strings containing the vocabulary entries.</p>', ], ], 'Settings' => [ 'base' => '<p>Provides optional settings for the <code>StartTranscriptionJob</code> operation.</p>', 'refs' => [ 'StartTranscriptionJobRequest$Settings' => '<p>A <code>Settings</code> object that provides optional settings for a transcription job.</p>', 'TranscriptionJob$Settings' => '<p>Optional settings for the transcription job. Use these settings to turn on speaker recognition, to set the maximum number of speakers that should be identified and to specify a custom vocabulary to use when processing the transcription job.</p>', ], ], 'StartTranscriptionJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartTranscriptionJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'ConflictException$Message' => NULL, 'InternalFailureException$Message' => NULL, 'LimitExceededException$Message' => NULL, 'NotFoundException$Message' => NULL, ], ], 'Transcript' => [ 'base' => '<p>Identifies the location of a transcription.</p>', 'refs' => [ 'TranscriptionJob$Transcript' => '<p>An object that describes the output of the transcription job.</p>', ], ], 'TranscriptionJob' => [ 'base' => '<p>Describes an asynchronous transcription job that was created with the <code>StartTranscriptionJob</code> operation. </p>', 'refs' => [ 'GetTranscriptionJobResponse$TranscriptionJob' => '<p>An object that contains the results of the transcription job.</p>', 'StartTranscriptionJobResponse$TranscriptionJob' => '<p>An object containing details of the asynchronous transcription job.</p>', ], ], 'TranscriptionJobName' => [ 'base' => NULL, 'refs' => [ 'DeleteTranscriptionJobRequest$TranscriptionJobName' => '<p>The name of the transcription job to be deleted.</p>', 'GetTranscriptionJobRequest$TranscriptionJobName' => '<p>The name of the job.</p>', 'ListTranscriptionJobsRequest$JobNameContains' => '<p>When specified, the jobs returned in the list are limited to jobs whose name contains the specified string.</p>', 'StartTranscriptionJobRequest$TranscriptionJobName' => '<p>The name of the job. Note that you can\'t use the strings "." or ".." by themselves as the job name. The name must also be unique within an AWS account.</p>', 'TranscriptionJob$TranscriptionJobName' => '<p>The name of the transcription job.</p>', 'TranscriptionJobSummary$TranscriptionJobName' => '<p>The name of the transcription job.</p>', ], ], 'TranscriptionJobStatus' => [ 'base' => NULL, 'refs' => [ 'ListTranscriptionJobsRequest$Status' => '<p>When specified, returns only transcription jobs with the specified status. Jobs are ordered by creation date, with the newest jobs returned first. If you don’t specify a status, Amazon Transcribe returns all transcription jobs ordered by creation date. </p>', 'ListTranscriptionJobsResponse$Status' => '<p>The requested status of the jobs returned.</p>', 'ListVocabulariesResponse$Status' => '<p>The requested vocabulary state.</p>', 'TranscriptionJob$TranscriptionJobStatus' => '<p>The status of the transcription job.</p>', 'TranscriptionJobSummary$TranscriptionJobStatus' => '<p>The status of the transcription job. When the status is <code>COMPLETED</code>, use the <code>GetTranscriptionJob</code> operation to get the results of the transcription.</p>', ], ], 'TranscriptionJobSummaries' => [ 'base' => NULL, 'refs' => [ 'ListTranscriptionJobsResponse$TranscriptionJobSummaries' => '<p>A list of objects containing summary information for a transcription job.</p>', ], ], 'TranscriptionJobSummary' => [ 'base' => '<p>Provides a summary of information about a transcription job. .</p>', 'refs' => [ 'TranscriptionJobSummaries$member' => NULL, ], ], 'UpdateVocabularyRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateVocabularyResponse' => [ 'base' => NULL, 'refs' => [], ], 'Uri' => [ 'base' => NULL, 'refs' => [ 'GetVocabularyResponse$DownloadUri' => '<p>The S3 location where the vocabulary is stored. Use this URI to get the contents of the vocabulary. The URI is available for a limited time.</p>', 'Media$MediaFileUri' => '<p>The S3 location of the input media file. The URI must be in the same region as the API endpoint that you are calling. The general form is:</p> <p> <code> https://s3-&lt;aws-region&gt;.amazonaws.com/&lt;bucket-name&gt;/&lt;keyprefix&gt;/&lt;objectkey&gt; </code> </p> <p>For example:</p> <p> <code>https://s3-us-east-1.amazonaws.com/examplebucket/example.mp4</code> </p> <p> <code>https://s3-us-east-1.amazonaws.com/examplebucket/mediadocs/example.mp4</code> </p> <p>For more information about S3 object names, see <a href="http://docs.aws.amazon.com/AmazonS3/latest/dev/UsingMetadata.html#object-keys">Object Keys</a> in the <i>Amazon S3 Developer Guide</i>.</p>', 'Transcript$TranscriptFileUri' => '<p>The location where the transcription is stored.</p> <p>Use this URI to access the transcription. If you specified an S3 bucket in the <code>OutputBucketName</code> field when you created the job, this is the URI of that bucket. If you chose to store the transcription in Amazon Transcribe, this is a shareable URL that provides secure access to that location.</p>', ], ], 'Vocabularies' => [ 'base' => NULL, 'refs' => [ 'ListVocabulariesResponse$Vocabularies' => '<p>A list of objects that describe the vocabularies that match the search criteria in the request.</p>', ], ], 'VocabularyInfo' => [ 'base' => '<p>Provides information about a custom vocabulary. </p>', 'refs' => [ 'Vocabularies$member' => NULL, ], ], 'VocabularyName' => [ 'base' => NULL, 'refs' => [ 'CreateVocabularyRequest$VocabularyName' => '<p>The name of the vocabulary. The name must be unique within an AWS account. The name is case-sensitive.</p>', 'CreateVocabularyResponse$VocabularyName' => '<p>The name of the vocabulary.</p>', 'DeleteVocabularyRequest$VocabularyName' => '<p>The name of the vocabulary to delete. </p>', 'GetVocabularyRequest$VocabularyName' => '<p>The name of the vocabulary to return information about. The name is case-sensitive.</p>', 'GetVocabularyResponse$VocabularyName' => '<p>The name of the vocabulary to return.</p>', 'ListVocabulariesRequest$NameContains' => '<p>When specified, the vocabularies returned in the list are limited to vocabularies whose name contains the specified string. The search is case-insensitive, <code>ListVocabularies</code> will return both "vocabularyname" and "VocabularyName" in the response list.</p>', 'Settings$VocabularyName' => '<p>The name of a vocabulary to use when processing the transcription job.</p>', 'UpdateVocabularyRequest$VocabularyName' => '<p>The name of the vocabulary to update. The name is case-sensitive.</p>', 'UpdateVocabularyResponse$VocabularyName' => '<p>The name of the vocabulary that was updated.</p>', 'VocabularyInfo$VocabularyName' => '<p>The name of the vocabulary.</p>', ], ], 'VocabularyState' => [ 'base' => NULL, 'refs' => [ 'CreateVocabularyResponse$VocabularyState' => '<p>The processing state of the vocabulary. When the <code>VocabularyState</code> field contains <code>READY</code> the vocabulary is ready to be used in a <code>StartTranscriptionJob</code> request.</p>', 'GetVocabularyResponse$VocabularyState' => '<p>The processing state of the vocabulary.</p>', 'ListVocabulariesRequest$StateEquals' => '<p>When specified, only returns vocabularies with the <code>VocabularyState</code> field equal to the specified state.</p>', 'UpdateVocabularyResponse$VocabularyState' => '<p>The processing state of the vocabulary. When the <code>VocabularyState</code> field contains <code>READY</code> the vocabulary is ready to be used in a <code>StartTranscriptionJob</code> request.</p>', 'VocabularyInfo$VocabularyState' => '<p>The processing state of the vocabulary. If the state is <code>READY</code> you can use the vocabulary in a <code>StartTranscriptionJob</code> request.</p>', ], ], ],];
