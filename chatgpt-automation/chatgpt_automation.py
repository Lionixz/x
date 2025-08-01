
import pyautogui
import pyperclip 
import time
import random
import keyboard  
import pygame
import os
import sys



Noun = [
    "Accountability", "Accreditation", "Act", "Affidavit", "Agency", "Algebra", "Alibi", "Ammunition", "Analysis", "Appropriation",
    "Arbitration", "Archive", "Arithmetic", "Arrest", "Assessment", "Assignment", "Association", "Audit", "Authority", "Autonomy",
    "Autopsy", "Bail", "Ballistics", "Ballot", "Benchmark", "Benefits", "Bid", "Bill", "Biology", "Blended Learning",
    "Board Exam", "Bomb", "Bravery", "Budget", "Bureaucracy", "Burglary", "Cabinet", "Calendar", "Campaign", "Candidates",
    "Capacity Building", "Case", "Certification", "Chain of Command", "Chemistry", "Chief", "Citizenship", "Civics", "Civil Servant", "Classroom",
    "Code of Conduct", "Collaboration", "College", "Commission", "Community", "Community Policing", "Community Service", "Competency", "Competition", "Compliance",
    "Comprehension", "Computer", "Conduct", "Confederation", "Consensus", "Constitution", "Consultation", "Contract", "Control", "Convention",
    "Conviction", "Coroner", "Counseling", "Courage", "Court", "Credential", "Crime", "Crime Prevention", "Crime Rate", "Criminal",
    "Criminology", "Crisis", "Criteria", "Crown", "Curriculum", "Customs", "Cyber Security", "Cybercrime", "Data", "Debate",
    "Decentralization", "Decision-making", "Defense", "Delegation", "Democracy", "Demonstration", "Department", "Deposition", "Detective", "Detention",
    "Devolution", "Diplomacy", "Directive", "Discipline", "Discussion", "Distance Education", "District", "DNA", "Docket", "Documentation",
    "Due Process", "E-Government", "E-Learning", "Economics", "Education", "Effectiveness", "Efficiency", "Election", "Electorate", "Eligibility",
    "Embassy", "Emergency", "Empowerment", "Engagement", "Environment", "Ethics", "Evaluation", "Evidence", "Examination", "Expenditure",
    "Experiment", "Extradition", "Federal Service", "Feedback", "Fellowship", "Felony", "Fencing", "Fine", "Fingerprint", "Firearm",
    "Forensics", "Forum", "Fraud", "Functionary", "Gazette", "Geography", "Geometry", "Gerrymandering", "Giftedness", "Goal",
    "Governance", "Government", "Grade", "Grant", "Grievance", "Guidance", "Hacking", "Handcuffs", "Headquarters", "Hearing",
    "Hierarchy", "History", "Homicide", "Honor", "Hostage", "Human Resources", "Immunity", "Impartiality", "Implementation", "Imprisonment",
    "Inclusion", "Individualized Education Program", "Infraction", "Infrastructure", "Innovation", "Inspection", "Inspector", "Institution", "Instruction", "Integrity",
    "Intelligence", "Interest Group", "Internet", "Internship", "Interrogation", "Investigation", "Jail", "Job Description", "Judge", "Judiciary",
    "Jurisdiction", "Jurisprudence", "Jury", "Justice", "K9 Unit", "Key Performance Indicator", "Labor", "Laboratory", "Law", "Law Enforcement",
    "Lawmaking", "Lawyer", "Leadership", "Learner", "Learning Disability", "Learning Outcome", "Learning Style", "Lecture", "Legislation", "Legislature",
    "Lesson Plan", "Licensure", "Litigation", "Lobby", "Local Government", "Logistics", "Malware", "Management", "Mandamus", "Mandate",
    "Manslaughter", "Material", "Media", "Media Center", "Mediation", "Medical Examiner", "Memorandum", "Merit", "Methodology", "Military",
    "Misdemeanor", "Mission", "Modernization", "Modus Operandi", "Moral Education", "Motivation", "Multimedia", "Multiple Intelligences", "Municipality", "Murder",
    "Narcotics", "National Security", "Negotiation", "Neutrality", "Numeracy", "Objection", "Objective", "Observation", "Official", "Online Learning",
    "Operation", "Ordinance", "Organization", "Oversight", "Parole", "Partnership", "Patrol", "Pedagogy", "Penal Code", "Penalty",
    "Pension", "Performance", "Perjury", "Permanent Secretary", "Personnel", "Philosophy", "Phishing", "Physics", "Plea", "Plebiscite",
    "Police", "Policy", "Politicians", "Portfolio", "Position", "Precinct", "Preschool", "Presentation", "Press Release", "Prevention",
    "Prison", "Probation", "Procurement", "Professional Development", "Professionalism", "Profiling", "Program Evaluation", "Promotion", "Property", "Prosecution",
    "Prosecutor", "Protection", "Protocol", "Province", "Psychology", "Public Administration", "Public Debt", "Public Finance", "Public Interest", "Public Office",
    "Public Official", "Public Opinion", "Public Record", "Public Safety", "Public Sector", "Public Service", "Public Trust", "Public Works", "Publication", "Punishment",
    "Pupil", "Qualifications", "Quality Assurance", "Quota", "Radio", "Ransomware", "Ratification", "Reading", "Recall", "Recidivism",
    "Recruitment", "Red Tape", "Redistricting", "Reference", "Reform", "Region", "Regulation", "Rehabilitation", "Report", "Representation",
    "Republic", "Reputation", "Research", "Resource", "Response", "Restitution", "Revenue", "Revision", "Riot", "Robbery",
    "Rubric", "Safety", "Sanction", "Scam", "Scholarship", "School", "Science", "Search", "Seizure", "Selection",
    "Seminar", "Sentence", "Sergeant", "Service", "Settlement", "Simulation", "Skill", "Social Services", "Social Studies", "Society",
    "Sociology", "Software", "Sovereignty", "Squad Car", "Standard", "Standard Operating Procedure", "Standards", "State Service", "Statistics", "Statute",
    "Strategy", "Student", "Subpoena", "Suffrage", "Summit", "Superintendent", "Supervision", "Surveillance", "Suspect", "SWAT",
    "Syllabus", "Synthesis", "System", "Tactics", "Talent", "Tariff", "Tax", "Tax Evasion", "Teacher", "Teaching",
    "Technology", "Tender", "Tenure", "Terrorism", "Test", "Testimony", "Theft", "Theory", "Thesis", "Ticket",
    "Total Quality Management", "Traffic", "Training", "Transparency", "Treaty", "Trial", "Tribunal", "Tuition", "Uniform", "Union",
    "University", "Valor", "Values Education", "Verdict", "Veto", "Victim", "Victimology", "Violation", "Virus", "Voting",
    "Warrant", "Welfare", "Whistleblowing", "Witness", "Workforce", "Workshop", "Writing", "Zone"
]

Verb = [
    "abide", "accelerate", "accept", "accomplish", "account", "achieve", "acknowledge", "acquire", "adapt", "add",
    "address", "adhere", "adjust", "administer", "admire", "admit", "adopt", "advance", "advise", "advocate",
    "affect", "afford", "agree", "agree with", "aim", "align", "allocate", "allow", "amend", "analyze",
    "announce", "answer", "anticipate", "apologize for", "appeal", "appear", "apply", "apply for", "appoint", "appreciate",
    "approach", "approve", "argue", "arise", "arrange", "arrive", "articulate", "ask", "assert", "assess",
    "assign", "assist", "assume", "assure", "attach", "attack", "attain", "attempt", "attend", "attract",
    "audit", "avoid", "awaken", "award", "back up", "balance", "base", "bear", "beat", "become",
    "begin", "behave", "believe", "belong", "bend", "benefit", "bind", "blame", "blend", "blow",
    "boil", "boost", "borrow", "bring", "bring up", "build", "burn", "burst", "calculate", "call",
    "call off", "carry", "carry out", "cast", "catch", "cause", "cease", "challenge", "change", "characterize",
    "charge", "chart", "check", "choose", "cite", "clarify", "classify", "cling", "close", "collaborate",
    "collapse", "collect", "combine", "come", "come across", "command", "commence", "comment", "commit", "communicate",
    "compare", "compensate", "compete", "compile", "complain", "complete", "comply", "compose", "comprehend", "compromise",
    "compute", "conceive", "concentrate", "concentrate on", "conclude", "conduct", "confer", "confess", "confirm", "conform",
    "confront", "confuse", "connect", "consent", "consider", "consist", "consolidate", "constitute", "construct", "consult",
    "consume", "contact", "contain", "contemplate", "contend", "continue", "contract", "contradict", "contrast", "contribute",
    "contribute to", "control", "convene", "convert", "convey", "convince", "cooperate", "coordinate", "cope", "copy",
    "correct", "correlate", "correspond", "count", "cover", "crack", "create", "credit", "creep", "critique",
    "cut", "cut down", "deal", "debate", "decide", "declare", "decline", "dedicate", "deduce", "defend",
    "defer", "define", "delay", "delegate", "delete", "deliberate", "deliver", "demonstrate", "deny", "depend",
    "depend on", "depict", "deploy", "deposit", "derive", "describe", "desert", "deserve", "design", "desire",
    "destroy", "detect", "deter", "deteriorate", "determine", "develop", "deviate", "devise", "devote", "dictate",
    "differ", "dig", "digest", "direct", "disagree", "disappear", "disapprove", "disarm", "discover", "discuss",
    "disregard", "disseminate", "dissolve", "distinguish", "distort", "distribute", "disturb", "diverge", "divide", "do",
    "do away with", "document", "dominate", "doubt", "draft", "draw", "dream", "drift", "drink", "drive",
    "drop", "dwell", "earn", "eat", "edit", "educate", "effect", "elaborate", "elect", "elevate",
    "eliminate", "elucidate", "emanate", "embark", "embody", "emerge", "emphasize", "employ", "empower", "enable",
    "enact", "encourage", "encroach", "endanger", "endeavor", "endorse", "endure", "enforce", "engage", "enhance",
    "enlighten", "enlist", "ensure", "entail", "enter", "entertain", "envision", "equate", "equip", "eradicate",
    "establish", "estimate", "evaluate", "evaporate", "evolve", "examine", "exceed", "exchange", "excite", "exclude",
    "execute", "exemplify", "exempt", "exercise", "exert", "exhibit", "exist", "expand", "expect", "expedite",
    "expel", "experience", "explain", "explore", "expose", "express", "extend", "extract", "facilitate", "fail",
    "fall", "fall apart", "familiarize", "favor", "fear", "feed", "feel", "fight", "figure out", "file",
    "fill", "finalize", "finance", "find", "finish", "fit", "fix", "flee", "fling", "fly",
    "focus", "follow", "follow up", "forbid", "force", "forecast", "forfeit", "form", "formalize", "formulate",
    "forsake", "fortify", "foster", "frame", "freeze", "fulfill", "function", "fund", "furnish", "gain",
    "gather", "generate", "get", "get along", "give", "give in", "give up", "go", "go over", "govern",
    "grant", "grasp", "grind", "grow", "guarantee", "guard", "guide", "handle", "hang", "happen",
    "harmonize", "hate", "have", "heal", "hear", "help", "hesitate", "hide", "highlight", "hinder",
    "hold", "hold on", "hope", "identify", "ignore", "illustrate", "imagine", "implement", "imply", "impose",
    "improve", "include", "incorporate", "increase", "incur", "indicate", "induce", "influence", "inform", "infringe",
    "inherit", "initiate", "inject", "injure", "innovate", "inquire", "insist", "inspect", "inspire", "install",
    "institute", "instruct", "insure", "integrate", "intend", "interact", "intercept", "interest", "interfere", "interpret",
    "intervene", "interview", "introduce", "invent", "invest", "investigate", "involve", "issue", "join", "judge",
    "jump", "justify", "keep", "keep up", "kneel", "know", "lack", "launch", "lay", "lead",
    "lean", "leap", "learn", "leave", "lend", "let", "lie", "lift", "light", "like",
    "limit", "link", "listen", "listen to", "live", "load", "locate", "look", "look after", "look for",
    "lose", "love", "maintain", "make", "make up", "manage", "mandate", "manipulate", "manufacture", "map",
    "matter", "mean", "measure", "mediate", "meet", "mend", "mention", "merge", "migrate", "mind",
    "minimize", "mislead", "miss", "mitigate", "mix", "mobilize", "modify", "monitor", "motivate", "move"
]

Adjective = [
    "Accountable", "Accredited", "Administrative", "Advisory", "Affidavit", "Algebraic", "Analytical", "Annual", "Appellate", "Applicable",
    "Appointed", "Arbitrary", "Armed", "Arrestable", "Assessable", "Auditable", "Authentic", "Authoritative", "Autonomous", "Behavioral",
    "Biased", "Bilingual", "Bipartisan", "Budgetary", "Bureaucratic", "Calculated", "Canonical", "Capable", "Capital", "Career",
    "Categorical", "Causal", "Cautious", "Cellular", "Centralized", "Certified", "Chemical", "Civic", "Civil", "Classical",
    "Clinical", "Cognitive", "Collaborative", "Collective", "Collegiate", "Colonial", "Combatant", "Commercial", "Commissioned", "Communal",
    "Communicative", "Comparable", "Competent", "Competitive", "Compliant", "Comprehensive", "Compulsory", "Conceptual", "Confidential", "Confiscatory",
    "Constitutional", "Constructive", "Contemptuous", "Contextual", "Contingent", "Contractual", "Controlled", "Conventional", "Convicted", "Cooperative",
    "Coordinated", "Corrective", "Corrupt", "Counterfeit", "Covert", "Creative", "Credible", "Criminal", "Critical", "Cross-curricular",
    "Cultural", "Curricular", "Custodial", "Cybernetic", "Decentralized", "Deceptive", "Deductive", "Defensible", "Deferred", "Deliberate",
    "Democratic", "Demographic", "Developmental", "Deviant", "Diagnostic", "Didactic", "Differential", "Digital", "Diplomatic", "Disciplinary",
    "Discretionary", "Discriminatory", "Dismissive", "Disposable", "Disputable", "Diverse", "Documentary", "Domestic", "Dominant", "Dual",
    "Due", "Duplicate", "Dynamic", "Ecological", "Economic", "Editable", "Educated", "Educational", "Effective", "Efficient",
    "Elected", "Electronic", "Eligible", "Empirical", "Enforceable", "Engaging", "Enhanced", "Enrolled", "Environmental", "Equitable",
    "Ethical", "Ethnographic", "Evaluative", "Evasive", "Evidentiary", "Evolutionary", "Executive", "Exemplary", "Exempt", "Exhaustive",
    "Experimental", "Expert", "Explicit", "Exploratory", "Exponential", "Extenuating", "Extrajudicial", "Extralegal", "Extraordinary", "Facilitative",
    "Factual", "Failed", "Fair", "Federal", "Felonious", "Fiduciary", "Final", "Financial", "Fiscal", "Forensic",
    "Formal", "Formative", "Foundational", "Fraudulent", "Free", "Frequent", "Functional", "Fundamental", "General", "Genetic",
    "Geographic", "Geological", "Global", "Governing", "Graded", "Graduate", "Grammatical", "Grievable", "Gross", "Grouped",
    "Gubernatorial", "Guilty", "Habitual", "Harmful", "Hazardous", "Hereditary", "Hierarchical", "Holistic", "Homicidal", "Honorable",
    "Hostile", "Humanistic", "Ideal", "Illegal", "Illicit", "Immaterial", "Immature", "Immediate", "Immigrant", "Immunized",
    "Impartial", "Imperative", "Implementable", "Implied", "Important", "Improper", "Inadmissible", "Inclusive", "Income", "Inconsistent",
    "Incorporated", "Incorruptible", "Indefensible", "Independent", "Indicative", "Indigenous", "Indirect", "Indispensable", "Inductive", "Industrial",
    "Ineligible", "Inevitable", "Influential", "Informal", "Infrastructural", "Inherent", "Initial", "Injurious", "Innate", "Innocent",
    "Innovative", "Inquisitorial", "Institutional", "Instructional", "Instrumental", "Insufficient", "Integral", "Intellectual", "Intelligent", "Intentional",
    "Interactive", "Interagency", "Interdisciplinary", "Interest", "Interim", "Internal", "International", "Interpersonal", "Interpretive", "Interstate",
    "Interventional", "Investigative", "Involuntary", "Irreversible", "Irrevocable", "Joint", "Journalistic", "Judicious", "Juridical", "Jurisdictional",
    "Jurisprudential", "Just", "Justifiable", "Juvenile", "Key", "Knowledgeable", "Labor", "Laboratory", "Laissez-faire", "Landmark",
    "Language", "Larcenous", "Lateral", "Lawful", "Leading", "Learned", "Learning", "Legal", "Legislative", "Legitimate",
    "Lethal", "Leveled", "Lexical", "Liable", "Liberal", "Licensed", "Life", "Linguistic", "Literal", "Literary",
    "Litigious", "Local", "Logical", "Longitudinal", "Loyal", "Macroeconomic", "Maintainable", "Malicious", "Malpractice", "Managerial",
    "Mandated", "Mandatory", "Manipulative", "Manual", "Marginal", "Martial", "Material", "Mathematical", "Matriculated", "Mature",
    "Maximum", "Meaningful", "Measurable", "Mechanical", "Media", "Mediated", "Medical", "Memorized", "Mental", "Mercantile",
    "Merit-based", "Methodical", "Methodological", "Metropolitan", "Microeconomic", "Military", "Minimal", "Ministerial", "Minor", "Misdemeanor",
    "Mobile", "Modifiable", "Modular", "Monetary", "Moral", "Motivational", "Motor", "Municipal", "Narrative", "National",
    "Nationalistic", "Natural", "Navigational", "Negligent", "Negotiable", "Neutral", "Nominal", "Nonpartisan", "Normative", "Notable",
    "Notarized", "Notational", "Notorious", "Nuclear", "Numeric", "Objective", "Obligatory", "Observational", "Obstructive", "Occupational",
    "Offensive", "Official", "Operational", "Operationalized", "Oppressive", "Optimal", "Optional", "Oral", "Ordered", "Ordinary",
    "Organic", "Organizational", "Original", "Outlined", "Outstanding", "Overarching", "Overt", "Paid", "Paraprofessional", "Parental",
    "Parliamentary", "Participatory", "Partisan", "Passive", "Pastoral", "Patent", "Pathological", "Patriotic", "Pedagogical", "Penal",
    "Pending", "Perceptual", "Peremptory", "Perfect", "Performative", "Periodic", "Permanent", "Permissible", "Persistent", "Personal",
    "Persuasive", "Pertinent", "Philosophical", "Phonetic", "Physical", "Place-based", "Plausible", "Plea", "Pluralistic", "Police",
    "Policy", "Political", "Popular", "Portable", "Positive", "Postgraduate", "Posthumous", "Postsecondary", "Potential", "Practicable",
    "Practical", "Practiced", "Pragmatic", "Precedent", "Precise", "Predatory", "Predictive", "Preferential", "Preliminary", "Premeditated",
    "Preparatory", "Prerequisite", "Prescribed", "Presidential", "Pressing", "Presumptive", "Preventive", "Primary", "Prime", "Principal",
    "Prior", "Private", "Probable", "Probationary", "Problematic", "Procedural", "Professional", "Proficient", "Programmatic", "Progressive",
    "Prohibited", "Projective", "Promotional", "Proof", "Proper", "Proportional", "Proprietary", "Prospective", "Protected", "Protective",
    "Provisional", "Psychological", "Public", "Punishable", "Punitive", "Qualified", "Qualitative", "Quantitative", "Quasi-judicial", "Questionable",
    "Racial", "Radical", "Random", "Ranked", "Rapid", "Rational", "Readable", "Ready", "Real", "Reasonable",
    "Rebuttable", "Receptive", "Reciprocal", "Reckless", "Reconstructive", "Recorded", "Recursive", "Recycled", "Redacted", "Redistributive",
    "Redundant", "Referenced", "Referential", "Reflexive", "Reformative", "Regional", "Registered", "Regulatory", "Rehabilitative"
]

Adverbs = [
    "Aback", "Abed", "Abruptly", "Absently", "Absolutely", "Accurately", "Actually", "Ad interim", "Ad nauseam", "Adversely",
    "Afar", "Afloat", "Afoul", "Afterward", "Ago", "Ahead", "Almost", "Aloud", "Alow", "Already", "Also", "Alternatively", "Always",
    "Amiss", "Anew", "Angrily", "Anon", "Anxiously", "Anyhow", "Anyway", "Anywhere", "Apart", "Apparently", "Arguably", "Askance",
    "Astray", "Away", "Awkwardly", "Back", "Backward", "Badly", "Barely", "Before", "Beforehand", "Behind", "Below", "Betimes",
    "Biennially", "Briefly", "Brightly", "Briskly", "Broadly", "Calmly", "Carefully", "Centennially", "Certainly", "Clearly",
    "Closely", "Commonly", "Completely", "Consequently", "Considerably", "Consistently", "Constantly", "Conversely", "Correctly",
    "Currently", "Daily", "Dangerously", "Dearly", "Decadently", "Deeply", "Definitely", "Deliberately", "Directly", "Down",
    "Early", "Easily", "East", "Else", "Elsewhere", "En masse", "En route", "Enormously", "Enough", "Entirely", "Equally",
    "Erstwhile", "Especially", "Essentially", "Evenly", "Eventually", "Ever", "Evermore", "Everywhere", "Evidently", "Exactly",
    "Exclusively", "Extremely", "Fairly", "Faithfully", "Famously", "Far", "Fast", "Favorably", "Fiercely", "Financially",
    "Firmly", "First", "Fluently", "Fondly", "Foolishly", "Forever", "Formally", "Formerly", "Forthwith", "Fortnightly",
    "Fortunately", "Forward", "Frankly", "Freely", "Frequently", "Fully", "Fundamentally", "Generally", "Generously", "Gently",
    "Genuinely", "Gladly", "Gradually", "Gratefully", "Greatly", "Greedily", "Habitually", "Halfway", "Hard", "Hardly", "Hastily",
    "Here", "Heretofore", "Highly", "Hitherto", "Home", "Honestly", "Hopelessly", "Horribly", "Hourly", "Howbeit", "However",
    "Immediately", "Immensely", "Importantly", "In", "In situ", "In vitro", "In vivo", "Inasmuch", "Incredibly", "Indeed",
    "Independently", "Indirectly", "Inevitably", "Infinitely", "Informally", "Initially", "Inside", "Instantly", "Instead",
    "Intensely", "Intentionally", "Internally", "Jointly", "Jovially", "Joyfully", "Justly", "Keenly", "Kindly", "Knowingly",
    "Largely", "Last", "Late", "Lately", "Later", "Laxly", "Lazily", "Legally", "Legibly", "Less", "Lest", "Lightly", "Likely",
    "Likewise", "Literally", "Long", "Loudly", "Lovingly", "Low", "Loyally", "Luckily", "Madly", "Mainly", "Marginally", "Maybe",
    "Mechanically", "Merely", "Meticulously", "Mildly", "Miserably", "Monthly", "Morally", "More", "Moreover", "Mostly", "Much",
    "Mutually", "Naturally", "Near", "Nearly", "Neatly", "Necessarily", "Negatively", "Nervously", "Never", "Nevertheless",
    "Newly", "Next", "Nicely", "Nightly", "No", "Normally", "North", "Notably", "Now", "Nowadays", "Nowhere", "Objectively",
    "Obligingly", "Obviously", "Occasionally", "Oddly", "Off", "Oft", "Often", "Oftentimes", "Okay", "On", "Once", "Only",
    "Openly", "Optionally", "Orally", "Orderly", "Out", "Outdoors", "Outright", "Outside", "Over", "Overhead", "Overly",
    "Overnight", "Overseas", "Painfully", "Partially", "Particularly", "Passionately", "Past", "Patiently", "Per capita",
    "Per diem", "Perennially", "Perfectly", "Perforce", "Perhaps", "Permanently", "Personally", "Physically", "Piecemeal",
    "Plainly", "Pleasantly", "Plus", "Politely", "Poorly", "Positively", "Possibly", "Powerfully", "Practically", "Precisely",
    "Predominantly", "Preferably", "Presently", "Presumably", "Primarily", "Privately", "Pro rata", "Probably", "Profoundly",
    "Progressively", "Promptly", "Properly", "Provided", "Publicly", "Purely", "Purposely", "Quarterly", "Quasi", "Quickly",
    "Quietly", "Radically", "Randomly", "Rapidly", "Rarely", "Rather", "Readily", "Really", "Reasonably", "Recently",
    "Recklessly", "Regardless", "Regularly", "Relatively", "Relentlessly", "Reliably", "Reluctantly", "Remarkably",
    "Repeatedly", "Respectively", "Restlessly", "Rightly", "Rigorously", "Roughly", "Round", "Rudely", "Sadly", "Safely",
    "Sans", "Saving", "Scarcely", "Seasonally", "Secretly", "Securely", "Seemingly", "Seldom", "Selfishly", "Semi-annually",
    "Separately", "Seriously", "Severely", "Sharply", "Shortly", "Significantly", "Silently", "Similarly", "Simply",
    "Simultaneously", "Since", "Sincerely", "Singularly", "Slightly", "Slowly", "Smoothly", "So", "Socially", "Solely",
    "Somewhat", "Somewhere", "Soon", "South", "Specifically", "Speedily", "Spiritually", "Steadily", "Sternly", "Still",
    "Strategically", "Strictly", "Strongly", "Stubbornly", "Subsequently", "Substantially", "Subtly", "Successfully",
    "Suddenly", "Sufficiently", "Supposedly", "Surely", "Surprisingly", "Suspiciously", "Swiftly", "Technically",
    "Temporarily", "Tenderly", "Terminally", "Termly", "Terrifically", "Than", "Then", "Thence", "There", "Thereabout",
    "Thereafter", "Thereby", "Therein", "Thereof", "Thereto", "Thorough", "Thoroughly", "Though", "Throughout", "Thus",
    "Tightly", "Till", "Today", "Together", "Tomorrow", "Too", "Totally", "Toward", "Traditionally", "Tragically", "Truly",
    "Twice", "Ultimately", "Unanimously", "Unbelievably", "Underfoot", "Underground", "Underside", "Unfortunately",
    "Uniformly", "Unilaterally", "Uniquely", "Universally", "Unnecessarily", "Until", "Up", "Uphill", "Upon", "Upright",
    "Upside", "Upward", "Urgently", "Usually", "Utterly", "Vaguely", "Vainly", "Valiantly", "Vastly", "Verbally", "Versus",
    "Very", "Via", "Vicariously", "Vice", "Vigorously", "Violently", "Virtually", "Vis-à-vis", "Visibly", "Visually",
    "Voluntarily", "Warmly", "Weakly", "Weekly", "Well", "West", "When", "Whenever", "Where", "Whereas", "Whereby",
    "Wherein", "Whereof", "Whereto", "Whereupon", "Wherever", "While", "Whither", "Wholly", "Why", "Widely", "Wildly",
    "Willfully", "Wisely", "Within", "Without", "Wonderfully", "Worryingly", "Worth", "Wrongly", "Yearly", "Yesterday", "Yet",
    "Zealously"
]

Interjection = [
    "aah", "aargh", "achoo", "ack", "ah", "aha", "ahem", "ahh", "ahoy", "ai",
    "ai caramba", "aigh", "ain't", "alack", "alas", "allez", "allo", "aloha", "amen", "anyhoo",
    "anyhow", "argh", "as if", "attaboy", "attagirl", "au revoir", "auf Wiedersehen", "avast", "aw", "awesome",
    "aww", "ay", "aye", "bah", "baloney", "bam", "beep-beep", "begorra", "bingo", "blah",
    "blast", "blimey", "blooming", "boo", "boo hoo", "boo-ya", "boohoo", "bother", "boy", "bravo",
    "brr", "bull", "bye", "bye-bye", "cheerio", "cheers", "chin-chin", "chop-chop", "clank", "click",
    "congratulations", "cowabunga", "crickey", "crikey", "crunch", "d'oh", "dang", "darn", "dear", "dear me",
    "doh", "duh", "eeh", "eek", "eh", "encore", "eureka", "ew", "eww", "excellent",
    "fabulous", "fancy", "fiddlesticks", "fine", "foo", "foot", "forgive", "g'day", "gadzooks", "gah",
    "gangway", "gasp", "gawd", "gee", "gee whiz", "geez", "gesundheit", "get", "go", "good",
    "good grief", "good luck", "good riddance", "gosh", "gotcha", "gracious", "great", "grr", "gulp", "ha",
    "ha-ha", "hah", "hallelujah", "hallo", "halloa", "halloo", "hello", "help", "hey", "hi",
    "hmm", "ho-ho", "ho-hum", "hoo", "hooray", "hoot", "how", "howdy", "howzat", "hrrm",
    "huh", "hum", "humph", "hurrah", "hurray", "hush", "ick", "indeed", "jeepers", "jeez",
    "jesus", "kaboom", "kapow", "kazaam", "knock knock", "ladida", "lah-de-dah", "leggo", "listen", "lo",
    "look", "lord", "mama mia", "man", "marvelous", "meh", "mercy", "mmm", "moan", "mwah",
    "my", "my word", "nah", "namaste", "natch", "nerd", "no", "no way", "nope", "now",
    "nuts", "oh", "oh boy", "oh dear", "oh my", "oh no", "oh well", "oho", "oi", "oink",
    "ok", "okay", "ola", "om", "oof", "ooh", "ooh-la-la", "oomph", "oops", "oops-a-daisy",
    "ouch", "ow", "oww", "oy", "oyez", "pardon", "pew", "phew", "phooey", "ping",
    "plop", "poof", "pooh", "pooh-pooh", "pow", "psst", "ptui", "rah", "rats", "ready",
    "right", "roger", "rumble", "say", "see", "sh", "shame", "shazam", "sheesh", "shh",
    "shoo", "shoot", "shucks", "sigh", "silly", "slam", "smash", "snap", "sniff", "sniff-sniff",
    "snort", "sob", "sorry", "splash", "splendid", "spoiler", "squee", "strewth", "stuff", "sure",
    "swell", "ta", "ta-da", "ta-dah", "ta-ta", "take", "tally-ho", "tch", "thanks", "there",
    "thud", "tick-tock", "toodles", "tosh", "touche", "tsk", "tsk-tsk", "tut", "tut-tut", "ugh",
    "uh", "uh huh", "uh oh", "uh-uh", "uhh", "um", "ur", "urgh", "vroom", "wah",
    "wahoo", "well", "well done", "well well", "whee", "whew", "whoa", "whoo", "whoopee", "whoops",
    "whoosh", "why", "wicked", "wow", "wowee", "wowzer", "wowzers", "wtf", "yadda", "yay",
    "yea", "yeah", "yech", "yee-haw", "yeesh", "yep", "yes", "yikes", "yippee", "yo",
    "yoo-hoo", "yow", "yowza", "yuck", "yum", "yummy", "zap", "zounds", "zowee", "zzz"
]

Preposition = [
    "aboard", "about", "above", "according to", "across", "after", "against", "ahead of", "along", "along with",
    "alongside", "amid", "among", "amongst", "apart from", "around", "as", "as for", "as of", "as per",
    "as well as", "aside", "astride", "at", "atop", "barring", "because of", "before", "behind", "below",
    "beneath", "beside", "besides", "between", "beyond", "but", "by", "circa", "close to", "concerning",
    "considering", "despite", "down", "due to", "during", "except", "except for", "excepting", "excluding", "failing",
    "following", "for", "from", "in", "in addition to", "in case of", "in front of", "in place of", "in spite of",
    "including", "inside", "instead of", "into", "like", "minus", "near", "nearby", "next", "next to",
    "notwithstanding", "of", "off", "on", "on account of", "on top of", "onto", "opposite", "out of", "outside",
    "over", "past", "per", "plus", "prior to", "regarding", "round", "save", "since", "than",
    "through", "throughout", "till", "times", "to", "toward", "towards", "under", "underneath", "unlike",
    "until", "unto", "up", "upon", "versus", "via", "with", "with regard to", "with respect to", "within",
    "without", "worth"
]

Pronoun = [
    "everybody", "everyone", "everything", "few", "he", "her", "hers", "herself", "him", "himself",
    "all", "another", "any", "anybody", "anyone", "anything", "both", "each", "each other", "either",
    "his", "I", "it", "its", "itself", "many", "me", "mine", "more", "most",
    "much", "myself", "neither", "no one", "nobody", "none", "nothing", "one", "one another", "other",
    "others", "ours", "ourselves", "several", "she", "some", "somebody", "someone", "something", "such",
    "that", "theirs", "them", "themselves", "these", "they", "this", "those", "us", "we",
    "what", "which", "who", "whom", "whose", "you", "yours", "yourself", "yourselves"
]

Conjunction = [
    "after", "although", "and", "as", "as far as", "as if", "as long as", "as much as", "as soon as", "as though",
    "because", "before", "besides", "both", "but", "by the time", "consequently", "either", "even if", "even though",
    "finally", "for", "for example", "for instance", "furthermore", "hence", "however", "if", "in addition", "in case",
    "in fact", "in order that", "indeed", "instead", "just as", "lest", "like", "meanwhile", "moreover", "namely",
    "neither", "nevertheless", "next", "nonetheless", "nor", "not only", "now that", "once", "only if", "or",
    "otherwise", "provided that", "rather than", "since", "so", "so that", "still", "subsequently", "such that",
    "than", "that", "then", "therefore", "though", "thus", "till", "unless", "until", "when", "whenever", "where",
    "whereas", "wherever", "whether", "while", "yet"
]

next = [
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
    "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", "Next", 
]

run = next 

# Initialize
pyautogui.FAILSAFE = False
pygame.mixer.init()

# Paths
base_image_path = r'C:\chatgpt-automation'
sound_path = os.path.join(base_image_path, 'sound.mp3')
load_complete_image = os.path.join(base_image_path, 'load_complete.png')
copy_button_image = os.path.join(base_image_path, 'copy_button.png')
message_image = os.path.join(base_image_path, 'message.png')
reload_image = os.path.join(base_image_path, 'reload.png')
continue_image = os.path.join(base_image_path, 'continue.png')
limit_reach_image = os.path.join(base_image_path, 'limit_reach.png')

def play_sound(path):
    try:
        if os.path.exists(path):
            pygame.mixer.music.set_volume(1.0)
            pygame.mixer.music.load(path)
            pygame.mixer.music.play()
            print(f"🔊 Playing sound: {os.path.basename(path)}")
        else:
            print(f"❌ Sound file not found: {path}")
    except Exception as e:
        print(f"⚠️ Error playing sound: {e}")

# Main Loop
# for i in range(0, len(run), 10):
#     print(f"🔷 Processing Batch {i//10 + 1}/{(len(run)//10)+1}")
#     print(f"📦 Words: {i} → {min(i+9, len(run)-1)}")
    
    # words_batch = run[i:i+10]
    # words_string = ', '.join(words_batch) + (



print("🚀   Starting automation...")
print("⏳   Waiting 8 seconds for focus...")
time.sleep(8)
pyautogui.press('enter')
print("⌨️    Pressed ENTER to activate input")


for i in range(len(run)):
    print(f"🔷  Processing Word {i+1}/{len(run)}")
    print(f"📦  Word Index: {i}")

    # Emergency stop check
    if keyboard.is_pressed('ctrl+c'):
        print("🛑   EMERGENCY STOP! CTRL+C detected")
        sys.exit(1)


    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
    print("┃              ＳＴＡＲＴ              ┃")
    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")

    # Phase 1: Wait for 'System load'
    print("🔄   PHASE 1: Waiting for LOAD COMPLETE")
    error_count = 0
    while True:
        try:
            if pyautogui.locateOnScreen(load_complete_image, confidence=0.9):
                print("Load:✅  Passed. ")
                break
            else:
                print("Load: ⏱️  Waiting - (#{})".format(error_count+1))
                error_count += 1
                if error_count % 5 == 0:
                    print(f"Load: 🚨    {error_count} Alert")
                    play_sound(sound_path)
                    error_count == 0
        except Exception as e:
            print(f"Load: ✅    Error. {str(e)[:50]}...")
        time.sleep(60)



    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
    # Phase 2: Find message input
    print("🔄   PHASE 2: Locating message input")
    attempts = 0
    while True:
        try:
            attempts += 1
            message_location = pyautogui.locateCenterOnScreen(message_image, confidence=0.9)
            if message_location:
                print(f"Inbox: 📩   Passed.")
                pyautogui.click(message_location)
                time.sleep(1)
                print("Inbox: ⚠️    Clicked Inbox.")
                break
            else:
                print(f"Inbox: 🔍   Scanning Inbox... (Attempt {attempts})")
        except Exception as e:
            print(f"Inbox: ⚠️   Error: {str(e)[:50]}...")
        time.sleep(5)



    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")           
    # Phase 3: Send message
    print("🔄   PHASE 3: Sending prompt")

    words_batch = run[i:i+1]
    words_string = ', '.join(words_batch) + '\n' + (
        ' SQL Question Generation Rules:\n'
        ' Provide a brief explanation justifying in use.\n'
        ' Follow exam-style format (e.g., CSE, NAPOLCOM, LET, etc.).\n'
        ' Ensure SQL is error-free and grammatically correct.\n'
    )

    pyperclip.copy(words_string)
    pyautogui.hotkey('ctrl', 'v')
    time.sleep(3)
    print("Prompt: 📋   pasted in inbox")
    
    pyautogui.press('enter')
    print("Prompt: ⌨️    Enter")
    time.sleep(1)
    pyautogui.press('enter')
    print("Prompt: ⌨️    Enter")


    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
    # Phase 4: Reload check
    print("🔄   Checking System Reload")
    error_count = 0  # Initialize counter
    while True:
        try:
            reload_location = pyautogui.locateCenterOnScreen(reload_image, confidence=0.9)
            if reload_location:
                print("Reload: ⚠️   Reload required - Clicking...")
                pyautogui.click(reload_location)
                time.sleep(60)
                print("Reload: ⏳   Waited 60s after reload.")
                error_count = 0  # Reset counter on success
            else:
                error_count += 1
                print(f"Reload: ✅  Passed. (Not found count: {error_count})")

                if error_count >= 10:
                    print("Reload: 🚨   Alert triggered - Playing sound.")
                    play_sound(sound_path)
                    error_count = 0  # Reset after alert
                print("Reload: ✅   Passed.")
                break  
        except Exception as e:
            print(f"Reload: ⚠️  Error: {str(e)[:50]}...")
            break  # Exit loop on error or optionally continue


    # === Start detection ===
    print("🔍 Checking System Limit")
    try:
        location = pyautogui.locateCenterOnScreen(limit_reach_image, confidence=0.9)
        if location:
            print("Limit: ⚠️    Max limit")
            # === Play sound ===
            print("Limit: 🚨    Play Alert")
            play_sound(sound_path)
            
            # Wait until the sound finishes
            while pygame.mixer.music.get_busy():
                time.sleep(1)

            # === Stop system or script ===
            print("Limit: ⚠️    Stoping System")
            sys.exit("Limit: 🛑 Script stopped after playing sound.")
        else:
            print("Limit: ✅    Passed.")
    except Exception as e:
        print(f"Limit: ⚠️   Error. {str(e)}")


    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
    print("🔄   PHASE 5: Post-reload Verification")
    error_count = 0
    successful_cycles = 0
    required_successful_cycles = 5  # Run verification twice to ensure stability
    while successful_cycles < required_successful_cycles:
        try:
            print(f"Verification Cycle: {successful_cycles + 1}/{required_successful_cycles}")
            print("Verification: 🔄     Starting full check...")
            error_count = 0  # Reset error counter for each full cycle
            while True:
                try:
                    print("Verification: 🔄     Checking all conditions...")
                    # Step 1: Wait for full LOAD COMPLETE
                    load_complete = False
                    # First check for load complete
                    while not load_complete:
                        try:
                            if pyautogui.locateOnScreen(load_complete_image, confidence=0.9):
                                print("Load: ✅     Passed.")
                                load_complete = True
                            else:
                                print("Load: ⏱️      Waiting for load to complete...")
                                time.sleep(10)
                                # Check for reload/continue while waiting
                                try:
                                    reload_location = pyautogui.locateCenterOnScreen(reload_image, confidence=0.9)
                                    if reload_location:
                                        print("Reload: ⚠️   Found - Clicking...")
                                        pyautogui.click(reload_location)
                                        time.sleep(60)
                                        print("Reload: ⏳   Waited 60s after reload.")
                                except:
                                    pass
                                try:
                                    continue_location = pyautogui.locateCenterOnScreen(continue_image, confidence=0.9)
                                    if continue_location:
                                        print("Continue: ⚠️     Found - Clicking...")
                                        pyautogui.click(continue_location)
                                        time.sleep(30)
                                        print("Continue: ⏳     Waited 30s after click.")
                                except:
                                    pass
                        except Exception as e:
                            error_count += 1
                            print(f"Load: ⚠️    Checking load  [{error_count}] {str(e)[:50]}")
                            print("Load: 🔽     Pagedown")
                            pyautogui.press('pagedown')
                            time.sleep(10)
                            if error_count % 100 == 0:
                                print("Verification: 🚨     10 - Error")
                                play_sound(sound_path)
                                error_count = 0

                    # After load complete, verify reload/continue are not present
                    verification_passed = False
                    while not verification_passed:
                        reload_found = False
                        continue_found = False
                        # Check for reload image
                        try:
                            if pyautogui.locateOnScreen(reload_image, confidence=0.9):
                                print("Reload: ⚠️   Still present - needs handling")
                                reload_found = True
                        except:
                            pass
                        # Check for continue button
                        try:
                            if pyautogui.locateOnScreen(continue_image, confidence=0.9):
                                print("Continue: ⚠️ Still present - needs handling")
                                continue_found = True
                        except:
                            pass
                        
                        if not reload_found and not continue_found:
                            print("Verification: ✅ Passed")
                            verification_passed = True
                        else:
                            print("Verification: ⏱️  Waiting for reload/continue to complete...")
                            # Handle elements if found
                            if reload_found:
                                try:
                                    reload_location = pyautogui.locateCenterOnScreen(reload_image, confidence=0.9)
                                    if reload_location:
                                        print("Reload: ⚠️   Handling...")
                                        pyautogui.click(reload_location)
                                        time.sleep(60)
                                except:
                                    pass
                            if continue_found:
                                try:
                                    continue_location = pyautogui.locateCenterOnScreen(continue_image, confidence=0.9)
                                    if continue_location:
                                        print("Continue: ⚠️ Handling...")
                                        pyautogui.click(continue_location)
                                        time.sleep(30)
                                except:
                                    pass
                            time.sleep(10)
                    # Final check that load complete is still present
                    try:
                        if pyautogui.locateOnScreen(load_complete_image, confidence=0.9):
                            print("Final Check: ✅  Passed")
                            print("text: 🔽 Pagedown")
                            pyautogui.press('pagedown')
                            break  # Break inner while loop on full success
                        else:
                            print("Final Check: ⚠️  Load complete disappeared - restarting verification")
                    except Exception as e:
                        print(f"Final Check: ⚠️ Error: {str(e)[:50]}...")
                except Exception as e:
                    error_count += 1
                    print(f"Verification: ⚠️    [{error_count}] Main error: {str(e)[:50]}...")
                    if error_count % 10 == 0:
                        print("Verification: 🚨 10 consecutive errors - playing alert sound")
                        play_sound(sound_path)
                        error_count = 0
                    time.sleep(10)
            # Only reached after breaking inner loop
            print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
            print(f"Verification Cycle: ✅  PASSED ({successful_cycles + 1}/{required_successful_cycles})")
            successful_cycles += 1
            print("text: 🔽 Pagedown")
            pyautogui.press('pagedown')
            time.sleep(2)
        except Exception as e:
            successful_cycles = 0  # Reset success counter on critical error
            error_count += 1
            print(f"CRITICAL ERROR: ⚠️  [{error_count}] {str(e)[:50]}...")
            if error_count % 5 == 0:
                print("Verification: 🚨 5 consecutive errors - playing alert sound")
                play_sound(sound_path)
            time.sleep(15)
    print("Verification: 🎉 DOUBLE VERIFICATION SUCCESS! Proceeding...")


    # while True:
    #     try:
    #         print("Verification: 🔄 Checking all conditions...")
    #         # Step 1: Wait for full LOAD COMPLETE
    #         load_complete = False
    #         reload_done = False
    #         continue_done = False
    #         # First check for load complete
    #         while not load_complete:
    #             try:
    #                 if pyautogui.locateOnScreen(load_complete_image, confidence=0.9):
    #                     print("Load: ✅ Passed.")
    #                     load_complete = True
    #                 else:
    #                     print("Load: ⏱️ Waiting for load to complete...")
    #                     time.sleep(10)
    #                     # Even while waiting for load complete, check for reload and continue
    #                     # Check for reload image
    #                     try:
    #                         reload_location = pyautogui.locateCenterOnScreen(reload_image, confidence=0.9)
    #                         if reload_location:
    #                             print("Reload: ⚠️ Found - Clicking...")
    #                             pyautogui.click(reload_location)
    #                             time.sleep(60)
    #                             print("Reload: ⏳ Waited 60s after reload.")
    #                     except:
    #                         pass
    #                     # Check for continue button
    #                     try:
    #                         continue_location = pyautogui.locateCenterOnScreen(continue_image, confidence=0.9)
    #                         if continue_location:
    #                             print("Continue: ⚠️ Found - Clicking...")
    #                             pyautogui.click(continue_location)
    #                             time.sleep(30)
    #                             print("Continue: ⏳ Waited 30s after click.")
    #                     except:
    #                         pass
    #             except Exception as e:
    #                 error_count += 1
    #                 print(f"Load: ⚠️ Checking load  [{error_count}] {str(e)[:50]}")
    #                 time.sleep(10)
    #                 if error_count % 10 == 0:
    #                     print("Verification: 🚨 10 consecutive errors - playing alert sound")
    #                     play_sound(sound_path)
    #                     error_count = 0
    #                 time.sleep(10)

    #         # After load complete, verify reload and continue are not present
    #         verification_passed = False
    #         while not verification_passed:
    #             reload_found = False
    #             continue_found = False
    #             # Check for reload image
    #             try:
    #                 if pyautogui.locateOnScreen(reload_image, confidence=0.9):
    #                     print("Reload: ⚠️ Still present - needs handling")
    #                     reload_found = True
    #             except:
    #                 pass
    #             # Check for continue button
    #             try:
    #                 if pyautogui.locateOnScreen(continue_image, confidence=0.9):
    #                     print("Continue: ⚠️ Still present - needs handling")
    #                     continue_found = True
    #             except:
    #                 pass
    #             if not reload_found and not continue_found:
    #                 print("Verification: ✅ Passed")
    #                 verification_passed = True
    #                 break
    #             else:
    #                 print("Verification: ⏱️ Waiting for reload/continue to complete...")
    #                 # Handle reload if found
    #                 if reload_found:
    #                     try:
    #                         reload_location = pyautogui.locateCenterOnScreen(reload_image, confidence=0.9)
    #                         if reload_location:
    #                             print("Reload: ⚠️ Handling...")
    #                             pyautogui.click(reload_location)
    #                             time.sleep(60)
    #                     except:
    #                         pass
    #                 # Handle continue if found
    #                 if continue_found:
    #                     try:
    #                         continue_location = pyautogui.locateCenterOnScreen(continue_image, confidence=0.9)
    #                         if continue_location:
    #                             print("Continue: ⚠️ Handling...")
    #                             pyautogui.click(continue_location)
    #                             time.sleep(30)
    #                     except:
    #                         pass
    #                 time.sleep(10)
    #         # Final verification that load complete is still present
    #         try:
    #             if pyautogui.locateOnScreen(load_complete_image, confidence=0.9):
    #                 print("Final Check: ✅ Passed")
    #                 break
    #             else:
    #                 print("Final Check: ⚠️ Load complete disappeared - restarting verification")
    #                 continue
    #         except Exception as e:
    #             print(f"Final Check: ⚠️ Error: {str(e)[:50]}...")
    #             continue
                
    #     except Exception as e:
    #         error_count += 1
    #         print(f"Verification: ⚠️ [{error_count}] Main error: {str(e)[:50]}...")
    #         if error_count % 10 == 0:
    #             print("Verification: 🚨 10 consecutive errors - playing alert sound")
    #             play_sound(sound_path)
    #             error_count = 0
    #         time.sleep(10)

    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
    # Phase 6: Copy 
    print("🔄   PHASE 6: Copying results")
    copy_location = None
    scroll_count = 0
    scroll_attempts = 0
    # Scroll down
    for _ in range(2):
        print("text: 🔽 Pagedown")
        pyautogui.press('pagedown')
        time.sleep(0.5)

    while not copy_location:
        try:
            scroll_count += 1
            print(f"text: 🖱️    Scrolled down ({scroll_count*2} pages)")
            # Attempt to find copy button
            copy_location = pyautogui.locateCenterOnScreen(copy_button_image, confidence=0.9)
            if not copy_location:
                scroll_attempts += 1
                print(f"text: ⚠️    Copy button not found (Attempt {scroll_attempts})")
                if scroll_attempts >= 10:
                    print("text: 🚨 Emergency refresh triggered!")
                    play_sound(sound_path)
                    pyautogui.press('f5')
                    print("text: 🔄 Page refreshed")
                    scroll_attempts = 0
                    time.sleep(20)
            else:
                print(f"text: ✅    Copy button found after {scroll_count} scrolls")
        except Exception as e:
            print(f"text: ⚠️    Error: {str(e)[:50]}...")
            print("text: ⬆️  scroll up ")
            pyautogui.scroll(200)  
            time.sleep(1)



    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
    # Phase 7: Execute copy
    print("🔄   PHASE 7: Executing copy")
    for click_num in range(2):
        pyautogui.click(copy_location)
        print(f"text: ✅    Copy click #{click_num+1}")
        time.sleep(3)
    print("text: 📋 Copied to clipboard")

    print("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━")
    # Phase 8: Paste results
    print("🔄   PHASE 8: Pasting results")
    print("text: 📤 Switching windows...")
    pyautogui.hotkey('alt', 'tab')
    time.sleep(1)
    
    pyautogui.hotkey('ctrl', 'v')
    print("text: 📥 Pasted content")
    time.sleep(1)
    
    pyautogui.press('enter')
    time.sleep(1)
    pyautogui.press('enter')
    print("text: ✉️ Double ENTER sent")
    
    print("text: 🔄 Switching back...")
    pyautogui.hotkey('alt', 'tab')
    time.sleep(1)
    
    print(f"text: ✅    BATCH {i//10 + 1} COMPLETE!")
    print("="*50)

# Final completion
print("🎉   PROCESS COMPLETE! All batches finished")
print("🚨   Playing completion sound...")
play_sound(sound_path)
print("🖥️   Switching to final window")
pyautogui.hotkey('alt', 'tab')

# Keep sound playing until finished
while pygame.mixer.music.get_busy():
    time.sleep(1)

print("="*50)
print("🏁 Automation session ended successfully")
print("="*50)







